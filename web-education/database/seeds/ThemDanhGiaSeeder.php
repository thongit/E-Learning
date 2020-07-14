<?php

use Illuminate\Database\Seeder;
use App\danhgiakh;
class ThemDanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'1','so_sao'=>'5','noi_dung'=>'Tuyệt vời!','khoa_hoc_id'=>'5']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'2','so_sao'=>'4','noi_dung'=>'Hướng dẫn tận tình!','khoa_hoc_id'=>'6']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'3','so_sao'=>'5','noi_dung'=>'Tốt!','khoa_hoc_id'=>'1']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'4','so_sao'=>'5','noi_dung'=>'Khóa học đúng như mình mong đợi!','khoa_hoc_id'=>'1']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'5','so_sao'=>'3','noi_dung'=>'Nhiều vấn đề trong bài học chưa giảiquyết tối ưu lắm','khoa_hoc_id'=>'2']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'6','so_sao'=>'1','noi_dung'=>'Không như mong đợi!','khoa_hoc_id'=>'2']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'7','so_sao'=>'5','noi_dung'=>'Hướng dẫn tận tình!','khoa_hoc_id'=>'1']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'8','so_sao'=>'5','noi_dung'=>'Khác so với mô tả!','khoa_hoc_id'=>'2']
        );
        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'9','so_sao'=>'5','noi_dung'=>'Tuyệt vời!','khoa_hoc_id'=>'2']
        );

        $danhgiakh = danhgiakh::create(
        	['nguoi_dung_id'=>'10','so_sao'=>'5','noi_dung'=>'Đúng như mong đợi!','khoa_hoc_id'=>'3']
        );
    }
}
