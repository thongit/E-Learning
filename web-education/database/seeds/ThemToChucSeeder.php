<?php

use Illuminate\Database\Seeder;
use App\tochuc;
class ThemToChucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Anh Ngữ English Town','ma_so_thue'=>'969972472','dia_chi'=>'34 Trần Quốc Thảo, Phường 7, Quận 3, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Văn Nhơn','emal_nlh'=>'nhonnguyen@gmail.com','sdt_nlh'=>'0386473677','trang_thai'=>'1','nguoi_dung_id'=>'1']
        );
         $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung tâm tiếng trung Newsky','ma_so_thue'=>'544724667','dia_chi'=>'113 Đ. Lê Văn Sỹ, Phường 13, Phú Nhuận, Hồ Chí Minh','nguoi_lien_he'=>'Trần Hoài Thương','emal_nlh'=>'thuongnguyen@gmail.com','sdt_nlh'=>'0374873847','trang_thai'=>'1','nguoi_dung_id'=>'2']
        );
          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Học Tiếng Đức Phương Nam','ma_so_thue'=>'117778371','dia_chi'=>'357 Lê Hồng Phong, Phường 2, Quận 10, Hồ Chí Minh','nguoi_lien_he'=>'Phạm Trung Tín','emal_nlh'=>'tinpham@gmail.com','sdt_nlh'=>'0337263548','trang_thai'=>'1','nguoi_dung_id'=>'3']
        );
          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Ngoại Ngữ Tin Học Tín Thành','ma_so_thue'=>'581738132','dia_chi'=>'75 Hẻm 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh','nguoi_lien_he'=>'Phan Thành Nam','emal_nlh'=>'namphan@gmail.com','sdt_nlh'=>'0394726374','trang_thai'=>'1','nguoi_dung_id'=>'5']
        );
          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Ngoại Ngữ - Tin Học','ma_so_thue'=>'117866321','dia_chi'=>'155 Đường Võ Thị Sáu, Phường 6, Quận 3, Hồ Chí Minh','nguoi_lien_he'=>'Lê Tú Trinh','emal_nlh'=>'trinhle@gmail.com','sdt_nlh'=>'0394726374','trang_thai'=>'1','nguoi_dung_id'=>'6']
        );
          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm CNTT Quận 1','ma_so_thue'=>'402963935','dia_chi'=>'14 Nguyễn Thái Bình, Phường Nguyễn Thái Bình, Quận 1, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Như Ý','emal_nlh'=>'ynguyen@gmail.com','sdt_nlh'=>'0394726374','trang_thai'=>'1','nguoi_dung_id'=>'7']
        );
          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung tâm tin học MS - Quận 4','ma_so_thue'=>'815545573','dia_chi'=>'31 Nguyễn Khoái, Phường 1, Quận 4, Hồ Chí Minh','nguoi_lien_he'=>'Hồ Việt Trung','emal_nlh'=>'trungho@gmail.com','sdt_nlh'=>'0382743846','trang_thai'=>'1','nguoi_dung_id'=>'8']
        );
           $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Đào Tạo Kỹ Thuật Công Nghệ Thông Tin Nam Viễn Đông','ma_so_thue'=>'149016996','dia_chi'=>'5 Lê Lai, Phường 4, Gò Vấp, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Thành Phát','emal_nlh'=>'phatnguyen@gmail.com','sdt_nlh'=>'0316253748','trang_thai'=>'1','nguoi_dung_id'=>'9']
        );
           $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Bồi Dưỡng Năng Khiếu Âm Nhạc','ma_so_thue'=>'394016742','dia_chi'=>'112 Nguyễn Du, Phường Bến Thành, Quận 1, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Trung Lai','emal_nlh'=>'lainguyen@gmail.com','sdt_nlh'=>'0382746385','trang_thai'=>'1','nguoi_dung_id'=>'11']
        );
            $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Âm Nhạc Phanxico','ma_so_thue'=>'586720393','dia_chi'=>'228 Nguyễn Tiểu La, Phường 8, Quận 10, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Quang Hải','emal_nlh'=>'hainguyen@gmail.com','sdt_nlh'=>'0384727485','trang_thai'=>'1','nguoi_dung_id'=>'12']
        );
            $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Thể Dục Thể Thao Quận 10','ma_so_thue'=>'107756164','dia_chi'=>'9 Thành Thái, Phường 14, Quận 10, Hồ Chí Minh','nguoi_lien_he'=>'Đỗ Hùng Dũng','emal_nlh'=>'dungdo@gmail.com','sdt_nlh'=>'0374827498','trang_thai'=>'1','nguoi_dung_id'=>'13']
        );
             $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Thể Dục Thể Thao Rạch Chiếc','ma_so_thue'=>'111548078','dia_chi'=>'28 Xô Viết Nghệ Tĩnh, Phường 19, Bình Thạnh, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Tấn Hậu','emal_nlh'=>'haunguyen@gmail.com','sdt_nlh'=>'0386473677','trang_thai'=>'1','nguoi_dung_id'=>'15']
        );
              $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Đồ Họa Kiến Trúc DOA','ma_so_thue'=>'845364320','dia_chi'=>'420 Nơ Trang Long, Phường 13, Bình Thạnh, Hồ Chí Minh','nguoi_lien_he'=>'Bùi Tiến Dũng','emal_nlh'=>'dungbui@gmail.com','sdt_nlh'=>'0374873847','trang_thai'=>'1','nguoi_dung_id'=>'16']
        );
               $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Ctrl Z - Studio Đào Tạo Thiết Kế Đồ Họa','ma_so_thue'=>'632288862','dia_chi'=>'257/30 Phan Xích Long, Phường 1, Phú Nhuận, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Anh Đức','emal_nlh'=>'ducnguyen@gmail.com','sdt_nlh'=>'0384727674','trang_thai'=>'1','nguoi_dung_id'=>'14']
        );
                 $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Đào Tạo Kỹ Năng Sống Ý Tưởng Việt','ma_so_thue'=>'243633424','dia_chi'=>'42b Gò Dầu, Tân Sơn Nhì, Tân Phú, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Thế Anh','emal_nlh'=>'anhnguyen@gmail.com','sdt_nlh'=>'0384743745','trang_thai'=>'1','nguoi_dung_id'=>'17']
        );
                   $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung tâm đào tạo Kỹ năng sống Tôi Khác Biệt','ma_so_thue'=>'528663016','dia_chi'=>'158 Hồ Bá Kiện, Phường 15, Quận 10, Hồ Chí Minh','nguoi_lien_he'=>'Trần Quang Huy','emal_nlh'=>'huytran@gmail.com','sdt_nlh'=>'0384743745','trang_thai'=>'1','nguoi_dung_id'=>'18']
        );
                    $tochuc = tochuc::create(
        	['ten_to_chuc'=>'APPNET - Trung Tâm Đào Tạo Digital Marketing','ma_so_thue'=>'168617807','dia_chi'=>'31 Võ Văn Tần, Phường 6, Quận 3, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Tấn Kế','emal_nlh'=>'kenguyen@gmail.com','sdt_nlh'=>'0947364785','trang_thai'=>'1','nguoi_dung_id'=>'22']
        );
                       $tochuc = tochuc::create(
        	['ten_to_chuc'=>'DMA Việt Nam - Trung tâm Dạy Học Digital Marketing','ma_so_thue'=>'798870708','dia_chi'=>'23 Đ. Nguyễn Trãi, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Thị Cường','emal_nlh'=>'cuongnguyen@gmail.com','sdt_nlh'=>'0388594875','trang_thai'=>'1','nguoi_dung_id'=>'23']
        );

                       $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Đào Tạo Phát Triển Nghệ Thuật SiĐô','ma_so_thue'=>'693589760','dia_chi'=>'14 Đinh Tiên Hoàng, Phường 1, Bình Thạnh, Hồ Chí Minh','nguoi_lien_he'=>'Nguyễn Văn Kiên','emal_nlh'=>'kiennguyen@gmail.com','sdt_nlh'=>'0937476377','trang_thai'=>'1','nguoi_dung_id'=>'24']
        );
                          $tochuc = tochuc::create(
        	['ten_to_chuc'=>'Trung Tâm Đào Tạo Văn Hóa Nghệ Thuật Solartacademy','ma_so_thue'=>'548630841','dia_chi'=>'4 Cao Triều Phát, Tân Phong, Quận 7, Hồ Chí Minh','nguoi_lien_he'=>'Trần Quốc Huy','emal_nlh'=>'huytran@gmail.com','sdt_nlh'=>'0387487578','trang_thai'=>'1','nguoi_dung_id'=>'25']
        );



    }
}
