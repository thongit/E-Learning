<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\nguoidung;
use App\tochuc;
use App\Providers;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Alert;

use Mail;
use App\Mail\DemoMail;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $e;
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function dangKy()
    {
        return view('dang-ky');
    }
    public function getDangKyGiangVien()
    {
        return view('dang-ky-giang-vien');
    }
    
    public function postTroThanhGiangVien(Request $request)
    {
        $nguoidungs=nguoidung::find(auth()->user()->id);
        $nguoidungs->gioi_thieu=$request->KinhNghiem;
        $nguoidungs->loai_tk=2;
        $nguoidungs->update();
        return redirect()->back()->with('thongbao','Thêm thành công');
    }
    public function postTroThanhToChuc(Request $request)
    {
        $tochucs= new tochuc;
        $this->validate($request,
        [
            'TenToChuc'=>'required',
            'MaSoThue'=>'required',
            'DiaChi'=>'required',
            'TenNguoiLienHe'=>'required',
            'Email'=>'required|email|unique:to_chuc,emal_nlh'
        ],
        [
            'TenToChuc.required'=>'Bạn chưa nhập tên tổ chức',
            'MaSoThue.required'=>'Bạn chưa nhập mã số thuế',
            'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
            'TenNguoiLienHe.required'=>'Bạn chưa nhận tên người liên hệ',
            'Email.unique'=>'Email đã tồn tại'
        ]);
        $tochucs->ten_to_chuc=$request->TenToChuc;
        $tochucs->ma_so_thue=$request->MaSoThue;
        $tochucs->dia_chi=$request->DiaChi;
        $tochucs->nguoi_lien_he=$request->TenNguoiLienHe;
        $tochucs->emal_nlh=$request->Email;
        $tochucs->sdt_nlh=$request->SoDienThoai;
        $tochucs->trang_thai=1;
        $tochucs->nguoi_dung_id=auth()->user()->id;
        $nguoidungs=nguoidung::find(auth()->user()->id);
        $nguoidungs->loai_tk=2;
        $nguoidungs->update();
        $tochucs->save();
        return redirect()->back()->withInput(Input::all())->with('thongbao','Thêm thành công');
    }
    
    public function xuLyDangNhap(Request $request)
    {
        
        $email=$request->email;
        $mat_khau=$request->mat_khau;
        //$remember=$request->has('remember')? true:false;
        $nd = nguoidung::where('email','=',$request->email )->first();
        if ($nd == null || $nd->email != $request->email) {
            Session::flash('error', 'Email không tồn tại, vui lòng nhập lại!');
            return redirect('dang-nhap');
        }
        else if(!Hash::check($request->mat_khau,$nd->mat_khau)){
            Session::flash('error', 'Sai mật khẩu, vui lòng nhập lại!');
            return redirect('dang-nhap');
        }
        else if($nd->email = $request->email && Hash::check($request->mat_khau,$nd->mat_khau) && ($nd->loai_tk==1 || $nd->loai_tk ==2 ))
        {
        Auth::login($nd);
        session()->put('login', true);
        session()->put('ho_ten', $nd->ho_ten);
        session()->put('id_nd', $nd->id);
        session()->put('loai_tk', $nd->loai_tk);
        return redirect('/');
        }
        Auth::login($nd);
        session()->put('login', true);
        session()->put('ho_ten', $nd->ho_ten);
        session()->put('id_nd', $nd->id);
        return redirect('admin/thong-ke');
        
    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('dang-nhap');
    }

    
    public function xuLyDangKy(Request $request)
    {
        $this->validate($request,
        [
            'ho_ten'=>'required|min:3|',
            'so_cmnd'=>'required|max:10|',
            'so_dt'=>'required|max:10|',
            'mat_khau'=>'required',
            'mat_khau_nl'=>'required',
            'mat_khau'=>'required|min:6|',
            'mat_khau_nl'=>'required|same:mat_khau|',
            'email'=>'required|email|unique:nguoi_dung,email'
            
        ],
        [ 
            'so_cmnd.max'=>'Số chứng minh không hợp lệ!',
            'so_dt.max'=>'Số điện thoại không hợp lệ!',
            'ho_ten.min'=>'Tên đăng nhập phải lớn hơn 3 kí tự!',
            'mat_khau.min'=>'Mật khẩu phải có ít nhất 6 kí tự!',
            'mat_khau_nl.same'=>'Mật khẩu nhập lại không khớp!',
            'email.unique'=>'Email đã được đăng ký tài khoản!',

        ]);
       
        $nguoidung= new nguoidung;
        $nguoidung->ho_ten= $request->ho_ten;
        $nguoidung->email= $request->email;
        $nguoidung->mat_khau= bcrypt($request->mat_khau);
        $nguoidung->loai_tk= '1';
        $nguoidung->cmnd= $request->so_cmnd;
        $nguoidung->sdt= $request->so_dt;
        $nguoidung->anh_dai_dien= 'null';
        $nguoidung->dia_chi= 'null';
        $nguoidung->save();
        return redirect('dang-nhap')->with('thongbao','Đăng ký thành công');
    }
    
    public function getSua()
    {
        $nguoi_dung_ids=auth()->user()->id;
        $nguoidungs=DB::table('nguoi_dung')->where('id','=', $nguoi_dung_ids)->first();
        return view('trang-ca-nhan',compact('nguoidungs'));
    }

    public function postSua(Request $request)
    {  
        $nguoidung=nguoidung::find(auth()->user()->id);
       
        $this->validate($request,
        [
            'ho_ten'=>'required|min:3|',
            'so_cmnd'=>'required|max:10|',
            'so_dt'=>'required|max:10|',
            'anh-dai-dien'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    
        ],
        [ 
            'so_cmnd.max'=>'Số chứng minh không hợp lệ!',
            'so_dt.max'=>'Số điện thoại không hợp lệ!',
            'ho_ten.min'=>'Tên đăng nhập phải lớn hơn 3 kí tự!',
            'anh-dai-dien.image'=>'Định dạng phải là hình ảnh',
            'anh-dai-dien.mimes'=>'Đuôi hình ảnh phải là:jpeg, png, jpg, gif, svg',
            'anh-dai-dien.max'=>'Dung lượng tối đa 2048kb'

            
        ]);
        $nguoidung->ho_ten= $request->ho_ten;
        $nguoidung->email= $request->email;
        $nguoidung->cmnd= $request->so_cmnd;
        $nguoidung->sdt= $request->so_dt;
        if($request->hasFile('anh-dai-dien'))
        {   
          $file=$request->file('anh-dai-dien');
          $filenameWithExt = $request->file('anh-dai-dien')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
          $extension = $request->file('anh-dai-dien')->getClientOriginalExtension();
          $fileNameToStore = $filename.'_'.time().'.'.$extension;
          $destinationPath = 'assets/images';
          $file->move($destinationPath,$fileNameToStore);
          $nguoidung->anh_dai_dien=$fileNameToStore;
        }
       
        $nguoidung->dia_chi= $request->dia_chi;
        $nguoidung->update();
        return redirect('trang-ca-nhan')->with('thongbao','Cập nhật thành công');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quenMatKhau()
    {
        return view('quen-mat-khau');
    }

    public function xuLyQuenMatKhau(Request $request)
    {
        
    //     //$remember=$request->has('remember')? true:false;
    //     $nguoidungs = nguoidung::where('email','=',$request->email )->first();
    //     if ($nguoidungs == null || $nguoidungs->email != $request->email) {
    //         Session::flash('error', 'Email không tồn tại, vui lòng nhập lại!');
    //         return redirect('quen-mat-khau');
    //     }
    //     $nguoidungs = Sentinel::findById($nguoidungs->id);
    //     $reminder = Reminder::exists($nguoidungs) ? : Reminder::create($nguoidungs);
    //     $this->sendEmail($nguoidungs,$reminder->code);
    //     return redirect('quen-mat-khau')->with('thongbao','Vui lòng kiểm tra email');
    // }
    // public function sendEmail($nguoidungs,$code)
    // {
    //     Mail::send(
    //         'email.forgot',
    //         ['nguoidungs'=>$nguoidungs,'code'=>$code],
    //         function($message) use ($nguoidungs){
    //             $message->to($nguoidungs->email);
    //             $message->subject("$nguoidungs->ho_ten,Đặt lại mk");

    //         }
    //     );   
    $e=$request->email;
        $nguoidungs = nguoidung::where('email','=',$request->email )->first();
        if ($nguoidungs == null || $nguoidungs->email != $request->email) {
            Session::flash('error', 'Email không tồn tại, vui lòng nhập lại!');
            return redirect('quen-mat-khau');
        }
        else{
    Mail::to($e)->send(new DemoMail($e));
    session()->put('email_qmk', $e);
    return redirect('quen-mat-khau')->with('thongbao','Đã gửi yêu cầu lấy lại mật khẩu, vui lòng kiểm tra email!');

        }
    }

    public function doiMatKhau()
    {
      return view('doi-mat-khau');
    }

    public function xuLyDoiMatKhau(Request $request)
    {
     $email = session()->get('email_qmk');
     $nguoidung=DB::table('nguoi_dung')->where('email','=', $email)->first();
  
     $this->validate($request,
     [
        'mat_khau'=>'min:6',
         'xac-nhan-mat-khau'=>'same:mat_khau'
     ],
     [ 
         'mat_khau.min'=>'Mật khẩu phải có ít nhất 6 kí tự!',
         'xac-nhan-mat-khau.same'=>'Mật khẩu nhập lại không khớp!'

     ]);
     DB::table('nguoi_dung')
     ->where('id', $nguoidung->id)
     ->update(['mat_khau' =>bcrypt($request->mat_khau)]);
     return redirect('dang-nhap')->with('thongbao','Cập nhật thành công');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
