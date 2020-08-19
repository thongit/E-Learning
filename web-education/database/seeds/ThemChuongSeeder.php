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
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Describing your job','thoi_gian'=>'250','trang_thai'=>'1']
        );
            $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Teamwork problem on the job','thoi_gian'=>'250','trang_thai'=>'1']
        );
             $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Working abroad','thoi_gian'=>'250','trang_thai'=>'1']
        );
              $chuong = chuong::create(
        	['khoa_hoc_id'=>'2','ten_chuong'=>'Giving Feedback','thoi_gian'=>'250','trang_thai'=>'1']
        );
               $chuong = chuong::create(
        	['khoa_hoc_id'=>'3','ten_chuong'=>'Choosing a college','thoi_gian'=>'250','trang_thai'=>'1']
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
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'13','ten_chuong'=>'Nhập môn khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'13','ten_chuong'=>'Những vấn đề cơ bản','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'14','ten_chuong'=>'TỔNG QUAN VỀ DRUPAL','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'14','ten_chuong'=>'LÀM VIỆC VỚI PHẦN QUẢN TRỊ DRUPAL','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'14','ten_chuong'=>'CẤU TRÚC DỮ LIỆU CỦA DRUPAL','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'14','ten_chuong'=>'ÁP DỤNG TÙY BIẾN DỮ LIỆU VÀO WEBSITE THỰC TẾ','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'15','ten_chuong'=>'Hướng dẫn cài đặt các công cụ thực hành','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'15','ten_chuong'=>'HTML','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'15','ten_chuong'=>'CSS','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'16','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'16','ten_chuong'=>'Chuẩn bị thiết kế Website','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'16','ten_chuong'=>'Các phương pháp thiết kế web','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'17','ten_chuong'=>'Thế giới web 2.0: HTML, CSS & JAVASCRIPT','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'17','ten_chuong'=>'Bắt đầu xây dựng trang web vớiI HTML','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'17','ten_chuong'=>'Sử dụng CSS để trang hoàng cho trang web của bạn','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'18','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'18','ten_chuong'=>'Tất cả kiến thức cơ bản về web','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'18','ten_chuong'=>'Giới thiệu về Wordpress và cài đặt','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'19','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'19','ten_chuong'=>'Thiết lập môi trường local','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'19','ten_chuong'=>'Định tuyến Route','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'20','ten_chuong'=>'Giới thiệu','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'20','ten_chuong'=>'Cốt lõi của NodeJS','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'20','ten_chuong'=>'Thực sự hiểu về Modules, Exports, và Require','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'21','ten_chuong'=>'GIỚI THIỆU KHÓA HỌC','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'21','ten_chuong'=>'GIỚI THIỆU VỀ BOOTSTRAP','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'21','ten_chuong'=>'WEBSITE SỐ 1 VỚI BOOTSTRAP','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'22','ten_chuong'=>'Giới thiệu về Hệ quản trị Cơ sở dữ liệu SQL Server','thoi_gian'=>'300','trang_thai'=>'1']
        );  
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'22','ten_chuong'=>'ADO.NET Database','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'22','ten_chuong'=>'ASP.NET','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'23','ten_chuong'=>'Nội dung khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'23','ten_chuong'=>'Tổng hợp các bài tập thực hành Excel','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'24','ten_chuong'=>'Những điều cơ bản đầu tiên','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'24','ten_chuong'=>'Cấp độ 1 – Làm quen với cây đàn','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'25','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        ); 
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'25','ten_chuong'=>'Khởi động làm nóng cơ thể,10 động tác thu gọn và làm căng da ','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'26','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'26','ten_chuong'=>'Quản lý thư viện hình ảnh với Lightroom','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'27','ten_chuong'=>'CÁC KỸ THUẬT THUYẾT TRÌNH CHUYÊN NGHIỆP CẦN CÓ','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'27','ten_chuong'=>'MỘT SỐ BÀI THUYẾT TRÌNH CÁ BIỆT','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'28','ten_chuong'=>'Giới thiệu khóa học','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'28','ten_chuong'=>'Tối ưu SEO cho Video','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'29','ten_chuong'=>'We are all storyteller','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'29','ten_chuong'=>'Character','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'30','ten_chuong'=>'Giới thiệu','thoi_gian'=>'300','trang_thai'=>'1']
        );
        $chuong = chuong::create(
        	['khoa_hoc_id'=>'30','ten_chuong'=>'Khoa học về da','thoi_gian'=>'300','trang_thai'=>'1']
        );


    }
}
