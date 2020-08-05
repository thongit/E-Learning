<?php

namespace App\Exports;
use App\nguoidung;
use App\ketquakt;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class BangDiemExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    public function __construct($id)
    {
       $this->id = $id;
    }
    public function collection()
    {
        $ketqua=DB::table('nguoi_dung')->join('ket_qua_kt','nguoi_dung.id','=','ket_qua_kt.nguoi_dung_id')->select('nguoi_dung_id','ho_ten','diem','ket_qua_kt.created_at')->where('bai_kiem_tra_id','=',$this->id)->whereNull('ket_qua_kt.deleted_at')->get();
        return $ketqua;
    }
    public function headings(): array
    {
        return ["id", "Họ và tên", "Điểm", "Thời gian làm"];
    }
}
