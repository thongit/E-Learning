<?php

use Illuminate\Database\Seeder;
use App\hoadon;
class ThemHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'1','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'2','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'3','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'4','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'5','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'6','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'7','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'8','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'9','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'10','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'11','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'12','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'13','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'14','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'15','dia_chi'=>'Q1-TPHCM','trang_thai'=>'1']
        );
    }
}
