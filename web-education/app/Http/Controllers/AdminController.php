<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\hoadon;
use App\cthoadon;
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
        $slHocVienThang = nguoidung::whereMonth('created_at', Carbon::now())->count();
        $tongHocVien = nguoidung::all();
        return view('thong-ke',compact('danhSachKhoaHoc','danhSachNguoiDung','danhSachGiangVien','slHocVienThang','tongHocVien'));
    }
    public function getHocVien()
    {
        $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get();
        return view('ds-hoc-vien-admin',compact('danhSachNguoiDung'));
    }

    public function getChuong($id)
    {
        $chuongs=chuong::find($id);
        return view('ds-chuong-admin',['chuongs'=>$chuongs]);
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

    public function thongKeDoanhThuKH($id)
    {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
        $khoHoID = $id;
        $slHocVien = cthoadon::whereMonth('created_at', Carbon::now())->where('khoa_hoc_id',$khoHoID)->count();
        $khoaHoc = khoahoc::find($khoHoID);

        $doanhThu = ($slHocVien*$khoaHoc->gia)*0.9;

      return view('thong-ke-doanh-thu-kh', compact('danhSachKhoaHoc', 'doanhThu'));

    }
    public function thongKeDoanhThuKHMD()
    {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
        $khoHoID = 1;
        $slHocVien = cthoadon::whereMonth('created_at', Carbon::now())->where('khoa_hoc_id',$khoHoID)->count();
        $khoaHoc = khoahoc::find($khoHoID);

        $doanhThu = ($slHocVien*$khoaHoc->gia)*0.9;

      return view('thong-ke-doanh-thu-kh', compact('danhSachKhoaHoc', 'doanhThu'));

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
