<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DOMDocument;
use App\khoahoc;
use App\baikiemtra;
use App\hoadon;
use App\cthoadon;
use App\ketquakt;

use Illuminate\Support\Facades\DB;

class GhiFileXmlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ghiDuLieu(Request $request)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        substr(str_shuffle($permitted_chars), 0, 6);
        $ten_file_bai_kt ='file-kiem-tra' . $request->chuong.substr(str_shuffle($permitted_chars), 0, 6).'.xml';
        $xmldoc = new DOMDocument('1.0', 'utf-8');
        $xmldoc->formatOutput = true;
        $root = $xmldoc->createElement("kiemtra");
        $xmldoc->appendChild($root);
        $cauhoi = $request->dscauhoi;
        $dem = sizeof($cauhoi);
        for ($i = 0; $i < $dem; $i++)
        {
            $cauHoi = $xmldoc->createElement("cauHoi");
            $noiDung = $xmldoc->createElement("noiDung");
            $noiDung->appendChild(
                $xmldoc->createTextNode($cauhoi[$i][0])
            );
            $dapAnA = $xmldoc->createElement("dapAnA");
            $dapAnA->appendChild(
                $xmldoc->createTextNode($cauhoi[$i][2])
            );
            $dapAnB = $xmldoc->createElement("dapAnB");
            $dapAnB->appendChild(
                $xmldoc->createTextNode($cauhoi[$i][3])
            );
            if($cauhoi[$i][4] == null)
            {
                $dapAnC = $xmldoc->createElement("dapAnC");
                $dapAnC->appendChild(
                    $xmldoc->createTextNode('')
                );
            }
            else
            {
                $dapAnC = $xmldoc->createElement("dapAnC");
                $dapAnC->appendChild(
                    $xmldoc->createTextNode($cauhoi[$i][4])
                );
            }
            if($cauhoi[$i][5] == null)
            {
                $dapAnD = $xmldoc->createElement("dapAnD");
                $dapAnD->appendChild(
                    $xmldoc->createTextNode('')
                );
            }
            else
            {
                $dapAnD = $xmldoc->createElement("dapAnD");
                $dapAnD->appendChild(
                    $xmldoc->createTextNode($cauhoi[$i][5])
                );
            }
            if($cauhoi[$i][6] == null)
            {
                $dapAnE = $xmldoc->createElement("dapAnE");
                $dapAnE->appendChild(
                    $xmldoc->createTextNode('')
                );
            }
            else
            {
                $dapAnE = $xmldoc->createElement("dapAnE");
                $dapAnE->appendChild(
                    $xmldoc->createTextNode($cauhoi[$i][6])
                );
            }
            if($cauhoi[$i][7] == null)
            {
                $dapAnF = $xmldoc->createElement("dapAnF");
                $dapAnF->appendChild(
                    $xmldoc->createTextNode('')
                );
            }
            else
            {
                $dapAnF = $xmldoc->createElement("dapAnF");
                $dapAnF->appendChild(
                    $xmldoc->createTextNode($cauhoi[$i][7])
                );
            }
            $dapAnDung = $xmldoc->createElement("dapAnDung");
            $dapAnDung->appendChild(
                $xmldoc->createTextNode($cauhoi[$i][1])
            );
            $cauHoi->appendChild($noiDung);
            $cauHoi->appendChild($dapAnA);
            $cauHoi->appendChild($dapAnB);
            $cauHoi->appendChild($dapAnC);
            $cauHoi->appendChild($dapAnD);
            $cauHoi->appendChild($dapAnE);
            $cauHoi->appendChild($dapAnF);
            $cauHoi->appendChild($dapAnDung);
            $root->appendChild($cauHoi);
        }

        $xmldoc->save(storage_path('app\\').$ten_file_bai_kt);

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
        return redirect('/khoa-hoc/ds-khoa-hoc-da-tao')->with('success', 'Thêm thành công!');
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
                if($ct_hoadon!=null)
                {
                    break;
                }
            }
            if($kiemtra == null || ($chuong->lam_lai == 1 && $lamlai == null))
            {
                if($id_nd == $chuong->Chuong->khoaHoc->nguoi_dung_id || (sizeof($hoaDon) > 0 && $ct_hoadon != null && $ct_hoadon->trang_thai == 2))
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
                        $xml = simplexml_load_file(storage_path('app\\').$tenFile)
                        or die("Không thể load file XML");
                        $a = json_decode( json_encode($xml) , 1);
                        for($i=0; $i < sizeof($a["cauHoi"]); $i++)
                        {
                            $cauHoi[$i] = array(
                                '0' => $a["cauHoi"][$i]["noiDung"],
                                '1' => $a["cauHoi"][$i]["dapAnDung"],
                                '2' => $a["cauHoi"][$i]["dapAnA"],
                                '3' => $a["cauHoi"][$i]["dapAnB"],
                                '4' => $a["cauHoi"][$i]["dapAnC"],
                                '5' => $a["cauHoi"][$i]["dapAnD"],
                                '6' => $a["cauHoi"][$i]["dapAnE"],
                                '7' => $a["cauHoi"][$i]["dapAnF"],
                            );
                        }
                        return view('trac-nghiem',compact('cauHoi','chuong'));
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

    public function index($id)
    {
        if(session()->has('id_nd'))
        {
            $id_nd = session()->get('id_nd');
            $khoaHoc = khoahoc::where([['nguoi_dung_id','=',$id_nd],['id', '=', $id],])->first();
            if($khoaHoc != null)
            {
                if(sizeof($khoaHoc->Chuong) > 0)
                {
                    $dsBaiKT[] = null;
                    $i = 0;
                    foreach($khoaHoc->Chuong as $baikt)
                    {
                        if(sizeof($baikt->baiKiemTra) >0)
                        {
                            $dsBaiKT[$i] = $baikt->baiKiemTra[0]->chuong_id;
                            $i++;
                        }
                    }
                    $chuong = DB::table('chuong')
                        ->where('khoa_hoc_id', '=', $id)
                        ->whereNotIn('id',$dsBaiKT)
                        ->get();
                    if(sizeof($chuong) == 0)
                    {
                        return redirect('/khoa-hoc/ds-khoa-hoc-da-tao')->with('warning', 'Không thể thêm bài kiểm tra. Mỗi chương trong khóa học này đều đã có bài kiểm tra!');
                    }
                    return view('them-cau-hoi', compact('khoaHoc', 'chuong'));
                }
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
