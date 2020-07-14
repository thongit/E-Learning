<?php

use Illuminate\Database\Seeder;
use App\thenganhang;
class ThemTheNganHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'1','so_tai_khoan'=>'589239125','ten_tren_the'=>'Nguyễn Thị Thảo Vy','ten_ngan_hang'=>'MB BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'2','so_tai_khoan'=>'411240767','ten_tren_the'=>'Lê Văn Trung','ten_ngan_hang'=>'ACB','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'3','so_tai_khoan'=>'168639224','ten_tren_the'=>'Trần Văn Hưng','ten_ngan_hang'=>'OCB','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'4','so_tai_khoan'=>'499724510','ten_tren_the'=>'Nguyễn Thị Tý','ten_ngan_hang'=>'ACB','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'5','so_tai_khoan'=>'691194914','ten_tren_the'=>'Nguyễn Thị Mai','ten_ngan_hang'=>'AGRIBANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
         $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'6','so_tai_khoan'=>'411240767','ten_tren_the'=>'Mai Tiến Dũng','ten_ngan_hang'=>'DONG A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'7','so_tai_khoan'=>'592376069','ten_tren_the'=>'Hồ Quang Hiếu','ten_ngan_hang'=>'MB BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'8','so_tai_khoan'=>'387683240','ten_tren_the'=>'Mai Tường Vy','ten_ngan_hang'=>'NAM A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
       
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'9','so_tai_khoan'=>'129601134','ten_tren_the'=>'Nguyễn Thị Oanh','ten_ngan_hang'=>'ACB','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'10','so_tai_khoan'=>'761846195','ten_tren_the'=>'Nguyễn Văn Trọng','ten_ngan_hang'=>'ACB','chi_nhanh'=>'Q1, Tp.HCM']
        );

        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'11','so_tai_khoan'=>'643990233','ten_tren_the'=>'Phạm Văn Tuấn','ten_ngan_hang'=>'NAM A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'12','so_tai_khoan'=>'120995512','ten_tren_the'=>'Nguyễn Tấn Hậu','ten_ngan_hang'=>'AGRIBANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'13','so_tai_khoan'=>'661859256','ten_tren_the'=>'Mai Thị Nhi','ten_ngan_hang'=>'MB BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'14','so_tai_khoan'=>'304864349','ten_tren_the'=>'Trương Văn Hiền','ten_ngan_hang'=>'OCB','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'15','so_tai_khoan'=>'396841659','ten_tren_the'=>'Nguyễn Ngọc Tiến','ten_ngan_hang'=>'DONG A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'16','so_tai_khoan'=>'874128872','ten_tren_the'=>'Lê Thị Tú Trinh','ten_ngan_hang'=>'DONG A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'17','so_tai_khoan'=>'968382724','ten_tren_the'=>'Khổng Thị Thu Nhạn','ten_ngan_hang'=>'NAM A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'18','so_tai_khoan'=>'189069824','ten_tren_the'=>'Nguyễn Thu Trang','ten_ngan_hang'=>'TPBANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'19','so_tai_khoan'=>'343560168','ten_tren_the'=>'Lê Văn Biểu','ten_ngan_hang'=>'BIDV','chi_nhanh'=>'Q1, Tp.HCM']
        );
        $thenganhang = thenganhang::create(
        	['nguoi_dung_id'=>'20','so_tai_khoan'=>'963954668','ten_tren_the'=>'Nguyễn Tuyết Trinh','ten_ngan_hang'=>'NAM A BANK','chi_nhanh'=>'Q1, Tp.HCM']
        );
    }
}
