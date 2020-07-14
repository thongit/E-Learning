<?php

use Illuminate\Database\Seeder;
use App\nhantin;
class ThemNhanTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'3','khoa_hoc_id'=>'1','noi_dung'=>'Thầy cho em hỏi cái này được không ạ?','nguoi_gui'=>'1','trang_thai'=>'1']
        );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'3','khoa_hoc_id'=>'1','noi_dung'=>'Hỏi gì em?','nguoi_gui'=>'2','trang_thai'=>'1']
        );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'3','khoa_hoc_id'=>'1','noi_dung'=>'Khi nào có phần tiếp theo vậy thầy?','nguoi_gui'=>'1','trang_thai'=>'1']
        );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'3','khoa_hoc_id'=>'1','noi_dung'=>'Tháng sau nha em!','nguoi_gui'=>'2','trang_thai'=>'1']
        );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'3','khoa_hoc_id'=>'1','noi_dung'=>'Dạ em cảm ơn thầy!','nguoi_gui'=>'1','trang_thai'=>'1']
        );
          $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'5','khoa_hoc_id'=>'1','noi_dung'=>'Thầy cho em hỏi cái này được không ạ?','nguoi_gui'=>'1','trang_thai'=>'1']
        ); $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'5','khoa_hoc_id'=>'1','noi_dung'=>'Hỏi gì em?','nguoi_gui'=>'2','trang_thai'=>'1']
        ); $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'5','khoa_hoc_id'=>'1','noi_dung'=>'Khi nào có phần tiếp theo vậy thầy?','nguoi_gui'=>'1','trang_thai'=>'1']
        ); $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'5','khoa_hoc_id'=>'1','noi_dung'=>'Tháng sau nha em!','nguoi_gui'=>'2','trang_thai'=>'1']
        ); $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'5','khoa_hoc_id'=>'1','noi_dung'=>'Dạ em cảm ơn thầy!','nguoi_gui'=>'1','trang_thai'=>'1']
        );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'6','khoa_hoc_id'=>'1','noi_dung'=>'Thầy cho em hỏi cái này được không ạ?','nguoi_gui'=>'1','trang_thai'=>'1']
        	 );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'6','khoa_hoc_id'=>'1','noi_dung'=>'Hỏi gì em?','nguoi_gui'=>'2','trang_thai'=>'1']
        	 );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'6','khoa_hoc_id'=>'1','noi_dung'=>'Khi nào có phần tiếp theo vậy thầy?','nguoi_gui'=>'1','trang_thai'=>'1']
        	 );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'6','khoa_hoc_id'=>'1','noi_dung'=>'Tháng sau nha em!','nguoi_gui'=>'2','trang_thai'=>'1']
        	 );
         $nhantin = nhantin::create(
        	['nguoi_dung_id'=>'6','khoa_hoc_id'=>'1','noi_dung'=>'Dạ em cảm ơn thầy!','nguoi_gui'=>'1','trang_thai'=>'1']
        	 );
    }
}
