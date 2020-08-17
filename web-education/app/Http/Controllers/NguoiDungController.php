<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\nguoidung;
use App\khoahoc;
use App\hoadon;
use App\tochuc;
use App\cthoadon;
use App\thenganhang;
use App\Providers;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Alert;

use Mail;
use App\Mail\DoiMatKhau;
use App\Mail\XacMinhTaiKhoan;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // private $e;
    
    public function dangNhap()
    {
        return view('login-2');
    }
    public function dangKy()
    {
        return view('register');
    }
    public function getDangKyGiangVien()
    {
        if(auth()->user()->loai_tk == 2)
        {
            return view('dang-ky-giang-vien');
        }
        else
        {
            return redirect()->back()->with('error', 'Bạn đã đăng ký rồi!');
        }
    }
    public function getThongKeKhoaHoc($idKhoaHoc)
    {
        if(auth()->user()->loai_tk == 2)
        {
            $tonghocvien=DB::table('ct_hoa_don')->where('khoa_hoc_id',$idKhoaHoc)->where('trang_thai',2)->count();
            $khoaHoc = khoahoc::find($idKhoaHoc);
            if($khoaHoc->nguoi_dung_id != auth()->user()->id)
            {
                abort(401);
            }
            $danhthu=($tonghocvien*$khoaHoc->gia)*0.9;
            $dshocvien=$khoaHoc->ctHoaDon->where('trang_thai',2);
            if(count($dshocvien)==0)
            {
                return view('thong-ke-khoa-hoc-giao-vien',['danhthu'=>$danhthu])->with('thongbao',0);
            }
            else
            {
            $i = 0;
            foreach ($dshocvien as $key => $ct) {
                $ds[$i] = array(
                    '0' => $ct->hoaDon->nguoiDung->anh_dai_dien,
                    '1' => $ct->hoaDon->nguoiDung->ho_ten,
                    '2' => $ct->hoaDon->nguoiDung->email
                ) ;
                $i++;
            }
            return view('thong-ke-khoa-hoc-giao-vien',['danhthu'=>$danhthu],['dsTenHocVien'=>$ds])->with('thongbao',1);;
        }
        }
        else
        {
            abort(401);
        }
    }

    public function getQuanLyDonHang()
    {
        if(auth()->user()->loai_tk == 2)
        {
        $cthoadons= cthoadon::all();
        $giangviens=nguoidung::find(auth()->user()->id);
        return view('ql-don-hang',['cthoadons'=>$cthoadons,'giangviens'=>$giangviens]);
        }
        else
        {
            abort(401);
        }
    }

    public function quanLyDonHangUpdate(Request $request,$id)
    {
        if(auth()->user()->loai_tk == 2)
        {
        $cthoadons=cthoadon::find($id);
        $hoadon = hoadon::find($cthoadons->hoa_don_id);
        if($hoadon->trang_thai==1)
        {
            $hoadon->trang_thai=2;
            $hoadon->save();
        }
        return redirect()->back()->with('message', 'Status changed!');
        }
        else
        {
            abort(401);
        }
    }

    public function postTroThanhGiangVien(Request $request)
    {
        $nguoidungs=nguoidung::find(auth()->user()->id);
        if($nguoidungs->trang_thai==2)
        {
            return redirect()->back()->with('thongbao','Bạn đã đăng ký thành giảng viên rồi');
        }
        $nguoidungs->gioi_thieu=$request->KinhNghiem;
        $nguoidungs->trang_thai=2;
        $nguoidungs->update();
        return redirect()->back()->with('thongbao','Đăng ký thành công,Đang chờ admin phê duyệt');
    }
    public function postTroThanhToChuc(Request $request)
    {
        $nguoidungs=nguoidung::find(auth()->user()->id);
        if($nguoidungs->trang_thai==2)
        {
            return redirect()->back()->with('thongbao','Bạn đã đăng ký thành giảng viên rồi');
        }
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
        $tochucs->trang_thai=2;
        $tochucs->nguoi_dung_id=auth()->user()->id;
        $nguoidungs->trang_thai=2;
        $nguoidungs->update();
        $tochucs->save();
        return redirect()->back()->withInput(Input::all())->with('thongbao','Đăng ký thành công,Đang chờ admin phê duyệt');
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
        else if($nd->email = $request->email && Hash::check($request->mat_khau,$nd->mat_khau) && $nd->trang_thai!=1 && $nd->trang_thai!=2)
        {
            Session::flash('error', 'Tài khoản không hợp lệ!');
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
    $trangthai=mt_rand(100000, 999999);
    $nguoidung= new nguoidung;
    $nguoidung->ho_ten= $request->ho_ten;
    $nguoidung->email= $request->email;
    $nguoidung->mat_khau= bcrypt($request->mat_khau);
    $nguoidung->loai_tk= '1';
    $nguoidung->cmnd= $request->so_cmnd;
    $nguoidung->sdt= $request->so_dt;
    $nguoidung->anh_dai_dien= 'anh-dai-dien.jpeg';
    $nguoidung->dia_chi= 'null';
    $nguoidung->gioi_thieu= 'null';
    $nguoidung->trang_thai= $trangthai;
    $nguoidung->save();
    session()->put('email', $request->email);
    session()->put('ma', $trangthai);
    Mail::to($request->email)->send(new XacMinhTaiKhoan($request->email));
    return redirect('xac-minh-tai-khoan');

    }

    public function getxacMinhTaiKhoan()
    {
        return view('xac-minh-tai-khoan');
    }

    public function postxacMinhTaiKhoan(Request $request)
    {
        $email_xn = Session::get('email');
        $nguoidungs=DB::table('nguoi_dung')->where('email','=', $email_xn)->first();
        if($request->ma_xac_minh == $nguoidungs->trang_thai)
        {
            DB::table('nguoi_dung')
     ->where('email',  $email_xn)
     ->update(['trang_thai' =>'1']);
            return redirect('dang-nhap')->with('thongbao','Đăng ký thành công!');

        }

        else if($request->ma_xac_minh != $nguoidungs->trang_thai)
        {
            
            return redirect('xac-minh-tai-khoan')->with('loi','Mã xác minh không đúng, Vui lòng nhập lại!');
        }
        // else if($dem==3)
        // {
        //     return "ok";
        // }
    }

    public function getSua()
    {
        if(auth()->user())
        {
            $nguoi_dung_ids=auth()->user()->id;
            $nguoidungs = nguoidung::find($nguoi_dung_ids);
            return view('thong-tin-ca-nhan',compact('nguoidungs'));
        }
        else
        {
            return redirect('dang-nhap')->with('alerterror', 'Vui lòng đăng nhập!');
        }
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
        $nguoidung->gioi_thieu= $request->gioi_thieu;
        $nguoidung->update();
        return redirect('thong-tin-ca-nhan')->with('thongbao','Cập nhật thành công');
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
        $e=$request->email;
        $nguoidungs = nguoidung::where('email','=',$request->email )->first();
        if ($nguoidungs == null || $nguoidungs->email != $request->email) {
            Session::flash('error', 'Email không tồn tại, vui lòng nhập lại!');
            return redirect('quen-mat-khau');
        }
        else{
            Mail::to($e)->send(new DoiMatKhau($e));
            session()->put('email_qmk', $e);
            return redirect('quen-mat-khau')->with('thongbao','Đã gửi yêu cầu lấy lại mật khẩu, vui lòng kiểm tra email!');
        }
    }

    public function doiMatKhau($ma)
    {
        $email = session()->get('email_qmk');
        if(!Hash::check($email,$ma))
        {
            abort(404);
        }
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

    public function xuLyDoiMatKhauTrangCaNhan(Request $request)
    {
        $nguoidung=nguoidung::find(auth()->user()->id);
    //     $this->validate($request,
    //  [
    //     'mat_khau'=>'min:6',
    //      'xac-nhan-mat-khau'=>'same:mat_khau'
    //  ],
    //  [
    //      'mat_khau.min'=>'Mật khẩu phải có ít nhất 6 kí tự!',
    //      'xac-nhan-mat-khau.same'=>'Mật khẩu nhập lại không khớp!'
    //  ]);
        if(!Hash::check($request->mat_khau_cu,$nguoidung->mat_khau)){
            return redirect('thong-tin-ca-nhan')->with('error','Sai mật khẩu, vui lòng kiểm tra lại!');
        }
        if($request->mat_khau != $request->xac_nhan_mat_khau){
            return redirect('thong-tin-ca-nhan')->with('error','Mật khẩu nhập lại không trùng khớp, vui lòng kiểm tra lại!');
        }
        else{
            DB::table('nguoi_dung')
     ->where('id', $nguoidung->id)
     ->update(['mat_khau' =>bcrypt($request->mat_khau)]);
     return redirect('thong-tin-ca-nhan')->with('thongbao','Đã đổi mật khẩu thành công');
        }

    }

    public function xuLyThemTaiKhoan(Request $request)
    {
        $nguoidung=nguoidung::find(auth()->user()->id);
        $thenganhang= thenganhang::where('nguoi_dung_id','=',auth()->user()->id)->first();
        $thenganhang->so_tai_khoan= $request->so_tai_khoan;
        $thenganhang->ten_tren_the= $request->ten_tren_the;
        $thenganhang->ten_ngan_hang= $request->ten_ngan_hang;
        $thenganhang->chi_nhanh= $request->chi_nhanh;
        $thenganhang->save();
        return redirect('thong-tin-ca-nhan')->with('thongbao','Cập nhật thành công');
    }

    public function khoaHocCuaToi()
    {
        if(auth()->user())
        {
            $id_nd=auth()->user()->id;
            $hocVien = nguoidung::find($id_nd);
            $listKH[] = null;
            $listTD[] = null;
            $i = 0;
            foreach($hocVien->hoaDon as $hd)
            {
                if($hd->trang_thai == 3 && $hd->ctHoaDon[0]->trang_thai == 2)
                {
                    $listKH[$i] = $hd->ctHoaDon[0]->khoa_hoc_id;
                    $listTD[$hd->ctHoaDon[0]->khoa_hoc_id] = $hd->ctHoaDon[0]->tien_do;
                    $i++;
                }
            }
            $dsKhoaHoc = khoahoc::whereIn('id',$listKH)->get();
            $tienDo[] = null;
            foreach($dsKhoaHoc as $key => $kh)
            {
                $tien_do = explode('_', $listTD[$kh->id]);
                $tienDo[$key] = 0;
                foreach ($kh->Chuong as $c)
                {
                    if($c->id < $tien_do[0])
                    {
                        $tienDo[$key] += $c->noiDung->count();
                    }
                    else if ($c->id == $tien_do[0])
                    {
                        foreach($c->noiDung as $nd)
                        {
                            if($nd->id <= $tien_do[1])
                            {
                                $tienDo[$key] += 1;
                            }
                        }
                    }
                }
                if($tienDo[$key] != 0)
                {
                    $tienDo[$key] = round(($tienDo[$key] / $kh->dsChuongBai->count())*100 , 1);
                }
            }
            return view('KhoaHoc.khoa-hoc-cua-toi',compact('dsKhoaHoc','tienDo'));

        }
        else
        {
            return redirect('dang-nhap')->with('alerterror', 'Vui lòng đăng nhập!');
        }
        // return view('KhoaHoc.khoa-hoc-cua-toi');
    }

    public function quanLyDonHang()
    {
        if(auth()->user())
        {
            $nguoi_dung_ids=auth()->user()->id;
            $hocVien = nguoidung::find($nguoi_dung_ids);
            //dd($hocVien);
            return view('ds-don-hang',compact('hocVien'));

        }
        else
        {
            return redirect('dang-nhap')->with('alerterror', 'Vui lòng đăng nhập!');
        }
        // return view('KhoaHoc.khoa-hoc-cua-toi');
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
