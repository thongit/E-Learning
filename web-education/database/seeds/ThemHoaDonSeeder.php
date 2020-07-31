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
        	['tong_tien'=>'199000','nguoi_dung_id'=>'1','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'2','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'3','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'4','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'5','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'6','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'7','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'8','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'9','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'599000','nguoi_dung_id'=>'10','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'11','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'12','trang_thai'=>'1']
        );

        $hoadon = hoadon::create(
        	['tong_tien'=>'499000','nguoi_dung_id'=>'13','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'14','trang_thai'=>'1']
        );
        $hoadon = hoadon::create(
        	['tong_tien'=>'199000','nguoi_dung_id'=>'15','trang_thai'=>'1']
        );
    }
}
