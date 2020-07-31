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
    public function getThongKe(Request $request)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachKhoaHoc=khoahoc::count();
            $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get()->count();
            $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->get()->count();

            //Hiển thị tháng năm
            $hienThiThang = $request->bdaymonth;

            if($hienThiThang == null)
            {
        
            //Thống kê học viên đăng kí trong tháng
            $slHocVienThang = nguoidung::whereMonth('created_at',Carbon::now())
                                        ->whereYear('created_at',Carbon::now())->where('loai_tk','=',1)->count();

            //Thống kê giảng viên đăng kí trong tháng
            $slGiangVienThang = nguoidung::whereMonth('created_at',Carbon::now())
            ->whereYear('created_at',Carbon::now())->where('loai_tk','=',2)->count();

            //Thống kê doanh thu theo tháng admin
            $doanhThuThangAd = hoadon::where('created_at','like', $request->bdaymonth.'%')->sum('tong_tien')*0.1;

            }
            else{
            //Thống kê học viên đăng kí trong tháng
            $slHocVienThang = nguoidung::where([['created_at','like', $request->bdaymonth.'%'],['loai_tk','=',1]])->count();

            //Thống kê giảng viên đăng kí trong tháng
            $slGiangVienThang = nguoidung::where([['created_at','like', $request->bdaymonth.'%'],['loai_tk','=',2]])->count();

            //Thống kê doanh thu theo tháng admin
            $doanhThuThangAd = hoadon::where('created_at','like', $request->bdaymonth.'%')->sum('tong_tien')*0.1;


            }

            //THống kê tổng doanh thu admin
            $tongDoanhThuAd = hoadon::sum('tong_tien')*0.1;

            //Tổng số học viên
            $tongHocVien = nguoidung::where('loai_tk','=',1)->count();;

            return view('thong-ke',compact('danhSachKhoaHoc','danhSachNguoiDung','danhSachGiangVien','slHocVienThang', 'slGiangVienThang','tongHocVien','doanhThuThangAd','tongDoanhThuAd','hienThiThang'));

        
            $danhSachKhoaHoc=khoahoc::count();
            $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get()->count();
            $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->get()->count();
            return view('thong-ke',compact('danhSachKhoaHoc','danhSachNguoiDung','danhSachGiangVien'));
        }
        else
        {
            abort(401);
        }
    }

    public function getHocVien()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->get();
            return view('ds-hoc-vien-admin',compact('danhSachNguoiDung'));
        }
        else
        {
            abort(401);
        }
    }

    public function getChuong($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $chuongs=chuong::find($id);
            return view('ds-chuong-admin',['chuongs'=>$chuongs]);
        }
        else
        {
            abort(401);
        }
    }

    public function getGiangVien()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->get();
            return view('ds-giang-vien-admin',compact('danhSachGiangVien'));
        }
        else
        {
            abort(401);
        }
    }

    public function getAdmin()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachAdmin=DB::table('nguoi_dung')->where('loai_tk', 3)->get();
            return view('ds-admin',compact('danhSachAdmin'));
        }
        else
        {
            abort(401);
        }
    }

    public function getKhoaHoc()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
            return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
        }
        else
        {
            abort(401);
        }
    }

    public function getKhoaHocChuaDuyet()
    {
        if(auth()->user()->loai_tk == 3)
        {
        $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',2)->get();
        return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
        }
        else
        {
            abort(401);
        }
    }

    public function getKhoaHocDaDuyet()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',3)->get();
            return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
        }
        else
        {
            abort(401);
        }
    }

    public function completedUpdate(Request $request,$id)
    {
        if(auth()->user()->loai_tk == 3)
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
        else
        {
            abort(401);
        }
    }
    public function khoaHocUpdate(Request $request,$id)
    {
        if(auth()->user()->loai_tk == 2)
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
        else
        {
            abort(401);
        }
    }

    public function thongKeDoanhThuKH($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
            $khoHoID = $id;
            $slHocVien = cthoadon::whereMonth('created_at', Carbon::now())->where('khoa_hoc_id',$khoHoID)->count();
            $khoaHoc = khoahoc::find($khoHoID);

            $doanhThu = ($slHocVien*$khoaHoc->gia)*0.9;

            return view('thong-ke-doanh-thu-kh', compact('danhSachKhoaHoc', 'doanhThu'));
        }
        else
        {
            abort(401);
        }
    }
    public function thongKeDoanhThuKHMD()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachKhoaHoc=DB::table('khoa_hoc')->get();
            $khoHoID = 1;
            $slHocVien = cthoadon::whereMonth('created_at', Carbon::now())->where('khoa_hoc_id',$khoHoID)->count();
            $khoaHoc = khoahoc::find($khoHoID);

            $doanhThu = ($slHocVien*$khoaHoc->gia)*0.9;

            return view('thong-ke-doanh-thu-kh', compact('danhSachKhoaHoc', 'doanhThu'));
        }
        else
        {
            abort(401);
        }
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
