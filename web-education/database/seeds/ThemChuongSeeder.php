<?php

use Illuminate\Database\Seeder;
use App\chuong;
class ThemChuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $chuong = chuong::create(
        	['khoa_hoc_id'=>'1','ten_chuong'=>'Giới thiệu','thoi_gian'=>'20','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'1','ten_chuong'=>'Ngữ âm cơ bản','thoi_gian'=>'200','trang_thai'=>'1']
        );
         $chuong = chuong::create(
        	['khoa_hoc_id'=>'1','ten_chuong'=>'Ngữ âm nâng cao','thoi_gian'=>'200','trang_thai'=>'2']
        );
          $chuong = chuong::create(
        	['khoa_hoc_id'=>'1','ten_chuong'=>'Tổng kết','thoi_gian'=>'15','trang_thai'=>'1']
        );
           $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Describing your job','thoi_gian'=>'180','trang_thai'=>'1']
        );
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Teamwork problem on the job','thoi_gian'=>'250','trang_thai'=>'1']
        );
             $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Working abroad','thoi_gian'=>'160','trang_thai'=>'1']
        );
              $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Giving Feedback','thoi_gian'=>'80','trang_thai'=>'1']
        );
               $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'Choosing a college','thoi_gian'=>'90','trang_thai'=>'1']
        );
                $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'Talking about examination','thoi_gian'=>'120','trang_thai'=>'1']
        );
                 $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'Preparing for school','thoi_gian'=>'140','trang_thai'=>'1']
        );
                  $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'The subjects you hate','thoi_gian'=>'220','trang_thai'=>'1']
        );
                   $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'Making new friends at school','thoi_gian'=>'130','trang_thai'=>'1']
        );
                    $chuong = chuong::create(
        	['khoa_hoc_id'=>'4','ten_chuong'=>'Private schools or public schools','thoi_gian'=>'120','trang_thai'=>'1']
        );
                     $chuong = chuong::create(
        	['khoa_hoc_id'=>'4','ten_chuong'=>'Talking about scholarships','thoi_gian'=>'210','trang_thai'=>'1']
        );
                      $chuong = chuong::create(
        	['khoa_hoc_id'=>'4','ten_chuong'=>' After-school activities','thoi_gian'=>'120','trang_thai'=>'1']
        );
                       $chuong = chuong::create(
        	['khoa_hoc_id'=>'5','ten_chuong'=>'Giới thiệu','thoi_gian'=>'20','trang_thai'=>'1']
        );
                        $chuong = chuong::create(
        	['khoa_hoc_id'=>'5','ten_chuong'=>'Family','thoi_gian'=>'250','trang_thai'=>'1']
        );
                         $chuong = chuong::create(
        	['khoa_hoc_id'=>'5','ten_chuong'=>'Daily routine','thoi_gian'=>'250','trang_thai'=>'1']
        );
                          $chuong = chuong::create(
        	['khoa_hoc_id'=>'5','ten_chuong'=>'Shopping','thoi_gian'=>'250','trang_thai'=>'1']
        );
                           $chuong = chuong::create(
        	['khoa_hoc_id'=>'5','ten_chuong'=>'Tổng kết','thoi_gian'=>'15','trang_thai'=>'1']
        );

                            $chuong = chuong::create(
        	['khoa_hoc_id'=>'6','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'120','trang_thai'=>'1']
        );
                             $chuong = chuong::create(
        	['khoa_hoc_id'=>'6','ten_chuong'=>'Lộ trình học','thoi_gian'=>'500','trang_thai'=>'1']
        );
                              $chuong = chuong::create(
        	['khoa_hoc_id'=>'8','ten_chuong'=>'Những lỗi thường gặp liên quan đến mạo từ và dấu câu','thoi_gian'=>'50','trang_thai'=>'1']
        );

                 $chuong = chuong::create(
        	['khoa_hoc_id'=>'8','ten_chuong'=>'Những lỗi thường gặp liên quan đến từ loại','thoi_gian'=>'300','trang_thai'=>'1']
        );
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'8','ten_chuong'=>'Cách dùng những từ hay gây nhầm lẫn','thoi_gian'=>'120','trang_thai'=>'1']
        );
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'9','ten_chuong'=>'Giới thiệu','thoi_gian'=>'15','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'9','ten_chuong'=>'Bảng chữ cái và chữ số','thoi_gian'=>'200','trang_thai'=>'1']
        );  
         $chuong = chuong::create(
        	['khoa_hoc_id'=>'9','ten_chuong'=>'Danh từ - Quán từ','thoi_gian'=>'200','trang_thai'=>'1']
        );  
         $chuong = chuong::create(
        	['khoa_hoc_id'=>'9','ten_chuong'=>'Đại từ','thoi_gian'=>'200','trang_thai'=>'1']
        );  
         $chuong = chuong::create(
        	['khoa_hoc_id'=>'9','ten_chuong'=>'Tổng kết','thoi_gian'=>'15','trang_thai'=>'1']
        );  
         $chuong = chuong::create(
        	['khoa_hoc_id'=>'10','ten_chuong'=>'Giới thiệu tổng quan','thoi_gian'=>'15','trang_thai'=>'1']
        );              
          $chuong = chuong::create(
        	['khoa_hoc_id'=>'10','ten_chuong'=>'Thành phần câu','thoi_gian'=>'100','trang_thai'=>'1']
        );  
           $chuong = chuong::create(
        	['khoa_hoc_id'=>'10','ten_chuong'=>'Câu phức','thoi_gian'=>'100','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'Hướng dẫn cài đặt các công cụ thực hành','thoi_gian'=>'15','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'HTML','thoi_gian'=>'120','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'CSS','thoi_gian'=>'150','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'JAVASCRIPT - FORM','thoi_gian'=>'200','trang_thai'=>'1']
        );  
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'JQUERY','thoi_gian'=>'230','trang_thai'=>'1']
        );  
              $chuong = chuong::create(
        	['khoa_hoc_id'=>'12','ten_chuong'=>'PHP - MYSQL - WAMP SERVER','thoi_gian'=>'300','trang_thai'=>'1']
        );  

    }
}
