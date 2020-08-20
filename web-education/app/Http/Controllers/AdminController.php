<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\khoahoc;
use App\linhvuc;
use App\chuong;
use App\noidung;
use App\hoadon;
use App\tochuc;
use App\cthoadon;
use App\nguoidung;
use App\thenganhang;
use Session;
use Auth;
use Mail;
use App\Mail\ThongBaoTroThanhGiangVien;
use App\Mail\ThongBaoDuyetKhoaHoc;
use App\Mail\ThongBaoKhongDuyetKhoaHoc;
use App\Mail\NhacNhoThanhToan;

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
            //lấy ngày tháng
            $layNgayThang = date('Y-m');


            if($hienThiThang == null)
            {

            //Thống kê học viên đăng kí trong tháng
            $slHocVienThang = nguoidung::whereMonth('created_at',Carbon::now())
                                        ->whereYear('created_at',Carbon::now())->whereIn('loai_tk',[1,2])->count();

            //Thống kê giảng viên đăng kí trong tháng
            $slGiangVienThang = nguoidung::whereMonth('created_at',Carbon::now())
            ->whereYear('created_at',Carbon::now())->where('loai_tk','=',2)->count();

            //Thống kê doanh thu theo tháng admin
            $doanhThuThangAd = hoadon::whereMonth('created_at',Carbon::now())
                                        ->whereYear('created_at',Carbon::now())->sum('tong_tien')*0.1;

            }
            else{
            //Thống kê học viên đăng kí trong tháng
            $slHocVienThang = nguoidung::where('created_at','like', $request->bdaymonth.'%')->whereIn('loai_tk',[1,2])->count();

            //Thống kê giảng viên đăng kí trong tháng
            $slGiangVienThang = nguoidung::where([['created_at','like', $request->bdaymonth.'%'],['loai_tk','=',2]])->count();

            //Thống kê doanh thu theo tháng admin
            $doanhThuThangAd = hoadon::where('created_at','like', $request->bdaymonth.'%')->sum('tong_tien')*0.1;


            }

            //THống kê tổng doanh thu admin
            $tongDoanhThuAd = hoadon::sum('tong_tien')*0.1;

            //Tổng số học viên
            $tongHocVien = nguoidung::whereIn('loai_tk',[1,2])->count();;

            return view('thong-ke',compact('danhSachKhoaHoc','danhSachNguoiDung','danhSachGiangVien','slHocVienThang', 'slGiangVienThang','tongHocVien','doanhThuThangAd','tongDoanhThuAd','hienThiThang','layNgayThang'));

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
            $danhSachNguoiDung=DB::table('nguoi_dung')->where('loai_tk', 1)->paginate(10);
            return view('ds-hoc-vien-admin',compact('danhSachNguoiDung'));
        }
        else
        {
            abort(401);
        }
    }

    public function getGiangVienCaNhan()
    {
        if(auth()->user()->loai_tk == 3)
        {
            $danhSachGiangVienCaNhan=DB::table('nguoi_dung')->where('loai_tk',1)->where('trang_thai',2)->paginate(10);
            return view('ds-dang-ky-giang-vien-ca-nhan',compact('danhSachGiangVienCaNhan'));
        }
        else
        {
            abort(401);
        }
    }

     public function postGiangVienCaNhan($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $nguoidungs=nguoidung::find($id);
            if($nguoidungs->trang_thai==2)
            {
                $nguoidungs->trang_thai=1;
                $nguoidungs->loai_tk=2;
                $nguoidungs->save();
                $thenh = new thenganhang;
                $thenh->nguoi_dung_id = $nguoidungs->id;
                $thenh->tong_tien = 0;
                $thenh->save();
                Mail::to($nguoidungs->email)->send(new ThongBaoTroThanhGiangVien($nguoidungs->email));
            }
            else
            {
                $nguoidungs->save();

            }
            return redirect()->back()->with('message', 'Status changed!');
        }
        else
        {
            abort(401);
        }
    }

    public function getGiangVienToChuc()
    {
        if(auth()->user()->loai_tk == 3)
        {
        $danhSachGiangVienToChuc=DB::table('to_chuc')->where('trang_thai',2)->paginate(10);
            return view('ds-dang-ky-giang-vien-to-chuc',compact('danhSachGiangVienToChuc'));
        }
        else
        {
            abort(401);
        }
    }

    public function postGiangVienToChuc($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $tochucs=tochuc::find($id);
            $nguoidungs=nguoidung::where('id',$tochucs->nguoi_dung_id)->first();
            if($tochucs->trang_thai==2)
            {
                $nguoidungs->trang_thai=1;
                $nguoidungs->loai_tk=2;
                $nguoidungs->update();
                $tochucs->trang_thai=1;
                $tochucs->save();
                $thenh = new thenganhang;
                $thenh->nguoi_dung_id = $nguoidungs->id;
                $thenh->tong_tien = 0;
                $thenh->save();
                Mail::to($nguoidungs->email)->send(new ThongBaoTroThanhGiangVien($nguoidungs->email));
            }
            else
            {
                $tochucs->save();
            }
            return redirect()->back()->with('message', 'Status changed!');
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
            $chuongs=chuong::where('khoa_hoc_id',$id)->get();
            return view('ds-chuong-admin',['chuongs'=>$chuongs]);
        }
        else
        {
            abort(401);
        }
    }

    public function getBaiGiang($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $baigiangs=noidung::where('chuong_id',$id)->get();
            return view('ds-bai-giang-admin',['baigiangs'=>$baigiangs]);
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
            $danhSachGiangVien=DB::table('nguoi_dung')->where('loai_tk', 2)->paginate(10);
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
            $danhSachKhoaHoc=DB::table('khoa_hoc')->paginate(10);
            return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
        }
        else
        {
            abort(401);
        }
    }

    public function getKhoaHocGiangVien($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $idGiangVien=nguoidung::find($id);
            $danhSachKhoaHoc=DB::table('khoa_hoc')->where('nguoi_dung_id',$id)->paginate(10);
            return view('ds-khoa-hoc-admin',compact('danhSachKhoaHoc'));
        }
        else
        {
            abort(401);
        }
    }

    public function getKhoaHocHocVien($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $hoaDon=DB::table('hoa_don')->where('nguoi_dung_id',$id)->get();
            $hocVien = nguoidung::find($id);
            return view('ds-khoa-hoc-hoc-vien-admin',compact('hocVien'));
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
        $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',2)->paginate(10);
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
            $danhSachKhoaHoc=DB::table('khoa_hoc')->where('trang_thai',3)->paginate(10);
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
                $nguoidungs = nguoidung::where('id','=', $khoahocs->nguoi_dung_id )->first();
                session()->put('tkh', $khoahocs->ten_khoa_hoc);
                Mail::to( $nguoidungs->email)->send(new ThongBaoDuyetKhoaHoc($nguoidungs->email));
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
    public function getHuyDuyetKhoaHoc($id)
    {
        if(auth()->user()->loai_tk == 3)
        {
            $khoahocs=khoahoc::find($id);
            if($khoahocs->trang_thai==2)
            {
                $nguoidungs = nguoidung::where('id','=', $khoahocs->nguoi_dung_id )->first();
                $khoahocs->trang_thai=1;
                $khoahocs->save();
                session()->put('tenkh_huy', $khoahocs->ten_khoa_hoc);
                Mail::to($nguoidungs->email)->send(new ThongBaoKhongDuyetKhoaHoc($nguoidungs->email));
            }
            else
            {
                $khoahocs->save();
            }
            return redirect()->back()->with('thongbao', 'đã hủy duyệt thành công');
        }
        else
        {
            abort(401);
        }
    }
    
    public function dsDoanhThuGV(Request $request)

    {
        if(auth()->user()->loai_tk != 3)
        {
            abort(401);
        }
        if($request->ajax())
        {
            $input = $request->ten;
            $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
            $giangVien = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->paginate(5);
            return view('doanhthugv',compact('giangVien'));
        }
        $giangVien = nguoidung::where('loai_tk','=',2)->paginate(5);
        return view('ds-doanh-thu-gv',compact('giangVien'));
    }

    public function dsDoanhThuGVPagin(Request $request)
    {
        if(auth()->user()->loai_tk != 3)
        {
            abort(401);
        }
        $input = $request->ten;
        if($request->ten == null)
        {
            $input = "";
        }
        $tochuc = tochuc::where('ten_to_chuc', 'like', '%'.$input.'%')->get('nguoi_dung_id');
        $giangVien = nguoidung::where([['ho_ten', 'like', '%'.$input.'%'],['loai_tk','=',2],])->orWhereIn('id',$tochuc)->paginate(5);
        return view('doanhthugv',compact('giangVien'))->render();
    }

    public function thanhToanGV(Request $request)
    {
        if(auth()->user()->loai_tk != 3)
        {
            abort(401);
        }
        $giangVien = nguoidung::find($request->idND);
        if($giangVien != null && $giangVien->loai_tk == 2)
        {
            $thnh = thenganhang::where('nguoi_dung_id','=',$giangVien->id)->first();
            $thnh->tong_tien = 0;
            $thnh->save();
            return response()->json(array('msg'=> 1), 200);
        }
        else
        {
            return response()->json(array('msg'=> 0), 200);
        }
    }

    public function nhacNhoTT(Request $request)
    {
        if(auth()->user()->loai_tk != 3)
        {
            abort(401);
        }
        $giangVien = nguoidung::find($request->idND);
        if($giangVien != null && $giangVien->loai_tk == 2)
        {
            $sotien = number_format($giangVien->theNganHang[0]->tong_tien).' VNĐ';
            session()->put('so_tien', $sotien);
            Mail::to($giangVien->email)->send(new NhacNhoThanhToan($giangVien->email));
            return response()->json(array('msgnn'=> 1 ), 200);
        }
        else
        {
            return response()->json(array('msgnn'=> 0), 200);
        }
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
