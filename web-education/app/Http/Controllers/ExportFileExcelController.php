<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
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
        $baiKiemTra->save();
        return redirect()->back()->with('success', 'Thêm thành công!');
   }

   public function docDuLieu($tenFile)
    {
        if(session()->has('id_nd'))
        {
            $id_nd = session()->get('id_nd');
            $chuong = baikiemtra::where('file_de_kt','=',$tenFile)->first();
            $khoaHocID = $chuong->Chuong->khoa_hoc_id;
            $hoaDon = hoadon::where('nguoi_dung_id','=',$id_nd)->get();
            $kiemtra = ketquakt::where([['nguoi_dung_id','=',$id_nd],['bai_kiem_tra_id', '=', $chuong->id],])->first();
            foreach($hoaDon as $hd)
            {
                $ct_hoadon = cthoadon::where([['hoa_don_id','=',$hd->id],['khoa_hoc_id','=',$khoaHocID],])->first();
            }
            if($kiemtra == null)
            {
                if(sizeof($hoaDon) > 0 && $ct_hoadon != null && $ct_hoadon->trang_thai == 1)
                {
                    $thoiGianCongBo = Carbon::create(2020, 07, 21, 12, 20, 00);
                    $thoiGianKetThuc = Carbon::create(2020, 07, 27, 12, 20, 00);
                    $now = Carbon::now();
                    
                    if($thoiGianCongBo >= $now)
                    {
                        echo 'Bài kiểm tra sẽ bắt đầu vào lúc: '.$thoiGianCongBo;
                    }
                    else if($thoiGianKetThuc <= $now)
                    {
                        echo 'Bài kiểm tra đã kết thúc';
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
                return redirect('/')->with('alerterror', 'Bạn đã hoàn thành bài kiểm tra!');
            }
        }
        else
        {
            return redirect('dang-nhap')->with('alerterror', 'Vui lòng đăng nhập!');
        }
    }

    public function luuBaiLam(Request $request) {
        $ketquakt = new ketquakt();
        $id_nd = session()->get('id_nd');
        $ketquakt->nguoi_dung_id = $id_nd;
        $ketquakt->bai_kiem_tra_id = $request->baiktid;
        $ketquakt->diem = $request->diem;
        $ketquakt->bai_lam = $request->bailam;
        $ketquakt->save();
        return response()->json(array('msg'=> 'Bạn đã hoàn thành bài kiểm tra!'), 200);
     }
}