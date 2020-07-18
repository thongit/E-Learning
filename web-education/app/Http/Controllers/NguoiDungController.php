<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\nguoidung;
use App\Providers;
use Session;
use Illuminate\Support\Facades\DB;
use Alert;
class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dangNhap()
    {
        return view('dang-nhap');
    }
    public function dangKy()
    {
        return view('dang-ky');
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
        return redirect('/');
        }
        Auth::login($nd);
        session()->put('login', true);
        session()->put('ho_ten', $nd->ho_ten);
        return redirect('thong-ke');
        
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
        
        $nguoidung->save();
        return redirect('dang-nhap')->with('thongbao','Đăng ký thành công');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "ok";
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
