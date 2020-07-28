<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use App\Imports\CauHoiImport;
use App\khoahoc;
use App\chuong;
use App\baikiemtra;
use App\hoadon;
use App\cthoadon;
use App\ketquakt;

class ExportFileExcelController extends Controller implements FromCollection, WithHeadings
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index($id)
    {
        if(session()->has('id_nd'))
        {
            $id_nd = session()->get('id_nd');
            $khoaHoc = khoahoc::where([['nguoi_dung_id','=',$id_nd],['id', '=', $id],])->first();
            if($khoaHoc != null)
            {
                $chuong = chuong::where('khoa_hoc_id','=',$id)->get();
                return view('themcauhoi', compact('khoaHoc', 'chuong'));
            }
            else
            {
                abort(404);
            }
        }
        else
        {

            return redirect('dang-nhap')->with('alerterror', 'Vui lòng đăng nhập!');
        }
        
    }

    public function collection()
    {
        $dem = $this->request->soCauHoi;
        $cauhoi = $this->request->dscauhoi;
        for ($i = 0; $i< $dem; $i++)
        {
            $order[] = array(
                '0' => $cauhoi[$i][0],
                '1' => $cauhoi[$i][1],
                '2' => $cauhoi[$i][2],
                '3' => $cauhoi[$i][3],
                '4' => $cauhoi[$i][4],
                '5' => $cauhoi[$i][5],
                '6' => $cauhoi[$i][6],
                '7' => $cauhoi[$i][7],
            );
        }
        return (collect($order));
    }

    public function headings(): array
    {
        return [
            'Câu hỏi',
            'Đáp án đúng',
            'Đáp án A',
            'Đáp án B',
            'Đáp án C',
            'Đáp án D',
            'Đáp án E',
            'Đáp án F',
        ];
    }

    public function export(Request $request){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        substr(str_shuffle($permitted_chars), 0, 6);
        $ten_file_bai_kt ='file-kiem-tra' . $request->chuong.substr(str_shuffle($permitted_chars), 0, 6).'.xlsx';
        Excel::store(new ExportFileExcelController($request), $ten_file_bai_kt);
        $baiKiemTra = new baikiemtra();
        $baiKiemTra->thoi_gian_lam = $request->thoiGianLam;
        $baiKiemTra->chuong_id = $request->chuong;
        $baiKiemTra->ten_bai_kt = $request->TenBaiKT;
        $baiKiemTra->file_de_kt = $ten_file_bai_kt;
        $baiKiemTra->trang_thai = 1;
        if($request->hienThiKQ == "HienThi")
        {
            $baiKiemTra->hien_thi = 1;
            $baiKiemTra->lam_lai = 0;
        }
        else if($request->hienThiKQ == "LamLai")
        {
            $baiKiemTra->hien_thi = 0;
            $baiKiemTra->lam_lai = 1;
        }
        else
        {
            $baiKiemTra->hien_thi = 0;
            $baiKiemTra->lam_lai = 0;
        }
        $baiKiemTra->thoi_gian_mo = $request->batDauKT;
        $baiKiemTra->thoi_gian_dong = $request->ketThucKT;
        $baiKiemTra->save();
        return redirect()->back()->with('success', 'Thêm thành công!');
   }

   public function docDuLieu($tenFile)
    {
        $id_nd = session()->get('id_nd');
        $chuong = baikiemtra::where('file_de_kt','=',$tenFile)->first();
        if($chuong != null)
        {
            $khoaHocID = $chuong->Chuong->khoa_hoc_id;
            $hoaDon = hoadon::where('nguoi_dung_id','=',$id_nd)->get();
            $kiemtra = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $chuong->id],])->first();
            $lamlai = ketquakt::onlyTrashed()->where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $chuong->id],])->first();
            foreach($hoaDon as $hd)
            {
                $ct_hoadon = cthoadon::where([['hoa_don_id','=',$hd->id],['khoa_hoc_id','=',$khoaHocID],])->first();
            }
            if($kiemtra == null)
            {
                if(sizeof($hoaDon) > 0 && $ct_hoadon != null && $ct_hoadon->trang_thai == 1)
                {
                    setlocale(LC_TIME, 'vi_VN');
                    Carbon::setLocale('vi');
                    $now = Carbon::now();
                    if($chuong->thoi_gian_mo != null)
                    {
                        $thoiGianCongBo = Carbon::create($chuong->thoi_gian_mo);
                    }
                    else
                    {
                        $thoiGianCongBo = null;
                    }
                    if($chuong->thoi_gian_dong != null)
                    {
                        $thoiGianKetThuc = Carbon::create($chuong->thoi_gian_dong);
                    }
                    else
                    {
                        $thoiGianKetThuc = null;
                    }
                    if($thoiGianCongBo != null && $thoiGianCongBo >= $now)
                    {
                        echo '<p style="text-align: center;font-size: x-large;content: initial;">Bài kiểm tra sẽ bắt đầu vào lúc: '.$thoiGianCongBo->diffForHumans().'</p>';
                    }
                    else if($thoiGianKetThuc != null && $thoiGianKetThuc <= $now)
                    {
                        echo '<p style="text-align: center;font-size: x-large;content: initial;">Bài kiểm tra đã kết thúc</p>';
                    }
                    else
                    {
                        $CauHoi = Excel::toArray(new CauHoiImport,$tenFile);
                        foreach($CauHoi as $cauHoi){}
                        array_splice($cauHoi,0,1);
                        return view('tracnghiem',compact('cauHoi','chuong'));
                    }
                }
                else
                {
                    abort(404);
                }
            }
            else if($chuong->lam_lai == 1 && $lamlai == null)
            {
                if(sizeof($hoaDon) > 0 && $ct_hoadon != null && $ct_hoadon->trang_thai == 1)
                {
                    setlocale(LC_TIME, 'vi_VN');
                    Carbon::setLocale('vi');
                    $now = Carbon::now();
                    if($chuong->thoi_gian_mo != null)
                    {
                        $thoiGianCongBo = Carbon::create($chuong->thoi_gian_mo);
                    }
                    else
                    {
                        $thoiGianCongBo = null;
                    }
                    if($chuong->thoi_gian_dong != null)
                    {
                        $thoiGianKetThuc = Carbon::create($chuong->thoi_gian_dong);
                    }
                    else
                    {
                        $thoiGianKetThuc = null;
                    }
                    if($thoiGianCongBo != null && $thoiGianCongBo >= $now)
                    {
                        echo '<p style="text-align: center;font-size: x-large;content: initial;">Bài kiểm tra sẽ bắt đầu vào lúc: '.$thoiGianCongBo->diffForHumans().'</p>';
                    }
                    else if($thoiGianKetThuc != null && $thoiGianKetThuc <= $now)
                    {
                        echo '<p style="text-align: center;font-size: x-large;content: initial;">Bài kiểm tra đã kết thúc</p>';
                    }
                    else
                    {
                        $CauHoi = Excel::toArray(new CauHoiImport,$tenFile);
                        foreach($CauHoi as $cauHoi){}
                        array_splice($cauHoi,0,1);
                        return view('tracnghiem',compact('cauHoi','chuong'));
                    }
                }
                else
                {
                    abort(404);
                }
            }
            else{
                return redirect()->back()->with('alerterror', 'Bạn đã hoàn thành bài kiểm tra!');
            }
        }
        else
        {
            abort(404);
        }
    }

    public function luuBaiLam(Request $request) {
        $ketquakt = new ketquakt();
        $id_nd = session()->get('id_nd');
        $baikt = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id','=',$request->baiktid],])->first();
        if($baikt != null)
        {
            $baikt->delete();
        }
        $ketquakt->nguoi_dung_id = $id_nd;
        $ketquakt->bai_kiem_tra_id = $request->baiktid;
        $ketquakt->diem = $request->diem;
        $ketquakt->bai_lam = $request->bailam;
        $ketquakt->save();
        $lamlai = ketquakt::onlyTrashed()->where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $request->baiktid],])->first();
        if($lamlai == null)
        {
            return response()->json(array('msg'=> 'Bạn đã hoàn thành bài kiểm tra!'), 200);
        }
        else
        {
            return response()->json(array('msg'=> 0), 200);
        }
    }

    public function destroy(Request $request)
    {
        $id_nd = session()->get('id_nd');
        $baikt = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id','=',$request->baiktid],])->first();
        $baikt->delete();
        return response()->json(array('msg'=> $request->baiktid), 200);
    }
}