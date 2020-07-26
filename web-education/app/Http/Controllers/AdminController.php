<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\nguoidung;
use App\noidung;
use Session;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getThongKe()
    {
        $danhSachKhoaHoc=khoahoc::count();
        $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get()->count();
        $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->get()->count();
        return view('thong-ke',compact('danhSachKhoaHoc','danhSachNguoiDung','danhSachGiangVien'));
    }
    public function getHocVien()
    {
        $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get();
        return view('ds-hoc-vien-admin',compact('danhSachNguoiDung'));
    }

    public function getGiangVien()
    {
        $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->get();
        return view('ds-giang-vien-admin',compact('danhSachGiangVien'));
    }

    public function getAdmin()
    {
        $danhSachAdmin=DB::table('nguoi_dung')->where('loai_tk', 3)->get();
        return view('ds-admin',compact('danhSachAdmin'));
    }

    public function getKhoaHoc()
    {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
        return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
    }

    public function getKhoaHocChuaDuyet()
    {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',2)->get();
        return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
    }

    public function getKhoaHocDaDuyet()
    {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',3)->get();
        return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
    }

    public function completedUpdate(Request $request,$id)
    {
        $khoahocs=khoahoc::find($id);
        if($khoahocs->trang_thai==2)
        {
            $khoahocs->trang_thai=3;
            $khoahocs->save();
        }
        else
        {
            $khoahocs->trang_thai=2;
            $khoahocs->save();
        }
        return redirect()->back()->with('message', 'Status changed!');
    }
    public function khoaHocUpdate(Request $request,$id)
    {
        $khoahocs=khoahoc::find($id);
        if($khoahocs->trang_thai==1)
        {
            $khoahocs->trang_thai=2;
            $khoahocs->save();
        }
        else if($khoahocs->trang_thai==2)
        {
            $khoahocs->trang_thai=1;
            $khoahocs->save();
        }
        else
        {
            $khoahocs->trang_thai=1;
            $khoahocs->save();
        }
        return redirect()->back()->with('message', 'Status changed!');
    }

    public function index()
    {
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
