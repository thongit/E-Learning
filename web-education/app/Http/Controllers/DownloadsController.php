<?php

namespace App\Http\Controllers;
use App\baikiemtra;
use App\noidung;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download($id) {
        $id_nd = auth()->user()->id; 
        $kh = noidung::find($id);
        if($kh == null)
        {
            abort(404);
        }
        $file_name = $kh->tai_lieu;
        foreach($kh->Chuong->khoaHoc->ctHoaDon as $dshv)
        {
            if( $dshv->hoaDon->nguoiDung->id == $id_nd && $dshv->trang_thai == 2)
            {
                $file_path = public_path('assets\\file\\'.$file_name);
                return response()->download($file_path);
                break;
            }
        }
        return abort(404);
    }

    public function downloadhd() {
        $file_path = public_path('assets\\file\\huong_dan_excel.xlsx');
        return response()->download($file_path);
    }

    public function export($id) {
        if(auth()->user()->loai_tk != 2)
        {
            abort(404);
        }
        $id_nd = auth()->user()->id; 
        $file_name = baikiemtra::find($id);
        if($file_name == null)
        {
            abort(404);
        }
        if($file_name->Chuong->khoaHoc->nguoi_dung_id != $id_nd)
        {
            abort(404);
        }
        $file_path = storage_path('app\\'.$file_name->file_de_kt);
        return response()->download($file_path);

    }
}
