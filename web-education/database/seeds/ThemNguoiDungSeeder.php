<?php

use Illuminate\Database\Seeder;
use App\nguoidung;
class ThemNguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nguoidung = nguoidung::create(

        	['ho_ten'=>'Nguyễn Thị Thảo Vy','email'=>'thaovy@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'948193116','sdt'=>'0337263548','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
        $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Văn Trung','email'=>'trungle@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'718285244','sdt'=>'0394726374','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
         $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trần Văn Hưng','email'=>'hungtran@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'803086715','sdt'=>'0307748392','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
          $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Tý','email'=>'tynguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'274534586','sdt'=>'0347263849','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Mai','email'=>'mainguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'179510764','sdt'=>'0394726374','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
            $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Tiến Dũng','email'=>'dungmai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'718285244','sdt'=>'0316253748','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
             $nguoidung = nguoidung::create(
            ['ho_ten'=>'Hồ Quang Hiếu','email'=>'hieuho@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'870449836','sdt'=>'0382746385','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Tường Vy','email'=>'vymai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'579490572','sdt'=>'0384727485','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
               $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Oanh','email'=>'oanhnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'936039849','sdt'=>'0374827498','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Văn Trọng','email'=>'trongnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'163790696','sdt'=>'0386473677','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Phạm Văn Tuấn','email'=>'tuanpham@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'297282585','sdt'=>'0374873847','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                  $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Tấn Hậu','email'=>'haunguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'475176537','sdt'=>'0337263548','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                   $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Thị Nhi','email'=>'nhimai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'905546743','sdt'=>'0394726374','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trương Văn Hiền','email'=>'hientruong@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'649649097','sdt'=>'0307748392','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Ngọc Tiến','email'=>'tiennguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'269506855','sdt'=>'0347263849','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Thị Tú Trinh','email'=>'trinhnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'672147386','sdt'=>'0382743846','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Khổng Thị Thu Nhạn','email'=>'nhankhong@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'650967267','sdt'=>'0316253748','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thu Trang','email'=>'trangnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'441538403','sdt'=>'0382746385','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Văn Biểu','email'=>'bieule@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'340934015','sdt'=>'0384727485','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                    $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Tuyết Trinh','email'=>'tuyettrinh@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'637162094','sdt'=>'0374827498','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                       $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lý Tiểu Long','email'=>'longnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'775885447','sdt'=>'0386473677','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                          $nguoidung = nguoidung::create(
            ['ho_ten'=>'Phan Thành Nam','email'=>'namphan@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'506665813','sdt'=>'0374873847','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                             $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trịnh Minh Linh','email'=>'minhlinh@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'277249083','sdt'=>'0384727674','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Văn Long','email'=>'longnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Văn Phước','email'=>'phuocmai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'489196705','sdt'=>'0937473744','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Công Phượng','email'=>'phuongnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'290653437','sdt'=>'0947364785','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trương Minh Quí','email'=>'minhqui1999tmt@gmail.com','mat_khau'=>Hash::make('62338020'),'loai_tk'=>'3','cmnd'=>'959043933','sdt'=>'0388594875','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                    $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Hữu Thông','email'=>'huuthongit@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'3','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Pham Bảo Thiện','email'=>'baothienit@gmail.com','mat_khau'=>Hash::make('036171200'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Võ Minh Tân','email'=>'minhtant@gmail.com','mat_khau'=>Hash::make('thaovyaye'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        );
                  $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Minh Triết','email'=>'trietnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'1','cmnd'=>'740868987','sdt'=>'0387589948','anh_dai_dien'=>'null','dia_chi'=>'null','gioi_thieu'=>'']
        	['ho_ten'=>'Nguyễn Thị Thảo Vy','email'=>'thaovy@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'948193116','sdt'=>'0337263548','anh_dai_dien'=>'','dia_chi'=>'',]
        );
        $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Văn Trung','email'=>'trungle@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'718285244','sdt'=>'0394726374','anh_dai_dien'=>'','dia_chi'=>'',]
        );
         $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trần Văn Hưng','email'=>'hungtran@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'803086715','sdt'=>'0307748392','anh_dai_dien'=>'','dia_chi'=>'',]
        );
          $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Tý','email'=>'tynguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'274534586','sdt'=>'0347263849','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Mai','email'=>'mainguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'179510764','sdt'=>'0394726374','anh_dai_dien'=>'','dia_chi'=>'',]
        );
            $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Tiến Dũng','email'=>'dungmai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'718285244','sdt'=>'0316253748','anh_dai_dien'=>'','dia_chi'=>'',]
        );
             $nguoidung = nguoidung::create(
            ['ho_ten'=>'Hồ Quang Hiếu','email'=>'hieuho@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'870449836','sdt'=>'0382746385','anh_dai_dien'=>'','dia_chi'=>'',]
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Tường Vy','email'=>'vymai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'579490572','sdt'=>'0384727485','anh_dai_dien'=>'','dia_chi'=>'',]
        );
               $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thị Oanh','email'=>'oanhnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'936039849','sdt'=>'0374827498','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Văn Trọng','email'=>'trongnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'163790696','sdt'=>'0386473677','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Phạm Văn Tuấn','email'=>'tuanpham@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'297282585','sdt'=>'0374873847','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                  $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Tấn Hậu','email'=>'haunguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'475176537','sdt'=>'0337263548','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                   $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Thị Nhi','email'=>'nhimai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'905546743','sdt'=>'0394726374','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trương Văn Hiền','email'=>'hientruong@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'649649097','sdt'=>'0307748392','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Ngọc Tiến','email'=>'tiennguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'269506855','sdt'=>'0347263849','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Thị Tú Trinh','email'=>'trinhnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'672147386','sdt'=>'0382743846','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Khổng Thị Thu Nhạn','email'=>'nhankhong@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'650967267','sdt'=>'0316253748','anh_dai_dien'=>'','dia_chi'=>'',]
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Thu Trang','email'=>'trangnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'441538403','sdt'=>'0382746385','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lê Văn Biểu','email'=>'bieule@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'340934015','sdt'=>'0384727485','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                    $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Tuyết Trinh','email'=>'tuyettrinh@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'637162094','sdt'=>'0374827498','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                       $nguoidung = nguoidung::create(
            ['ho_ten'=>'Lý Tiểu Long','email'=>'longnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'775885447','sdt'=>'0386473677','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                          $nguoidung = nguoidung::create(
            ['ho_ten'=>'Phan Thành Nam','email'=>'namphan@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'506665813','sdt'=>'0374873847','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                             $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trịnh Minh Linh','email'=>'minhlinh@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'277249083','sdt'=>'0384727674','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Văn Long','email'=>'longnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'','dia_chi'=>'',]
        );
           $nguoidung = nguoidung::create(
            ['ho_ten'=>'Mai Văn Phước','email'=>'phuocmai@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'489196705','sdt'=>'0937473744','anh_dai_dien'=>'','dia_chi'=>'',]
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Công Phượng','email'=>'phuongnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'2','cmnd'=>'290653437','sdt'=>'0947364785','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                 $nguoidung = nguoidung::create(
            ['ho_ten'=>'Trương Minh Quí','email'=>'minhqui1999tmt@gmail.com','mat_khau'=>Hash::make('62338020'),'loai_tk'=>'3','cmnd'=>'959043933','sdt'=>'0388594875','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                    $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Hữu Thông','email'=>'huuthongit@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'3','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'','dia_chi'=>'',]
        );
              $nguoidung = nguoidung::create(
            ['ho_ten'=>'Pham Bảo Thiện','email'=>'baothienit@gmail.com','mat_khau'=>Hash::make('036171200'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                $nguoidung = nguoidung::create(
            ['ho_ten'=>'Võ Minh Tân','email'=>'minhtant@gmail.com','mat_khau'=>Hash::make('thaovyaye'),'loai_tk'=>'2','cmnd'=>'863878138','sdt'=>'0384743745','anh_dai_dien'=>'','dia_chi'=>'',]
        );
                  $nguoidung = nguoidung::create(
            ['ho_ten'=>'Nguyễn Minh Triết','email'=>'trietnguyen@gmail.com','mat_khau'=>Hash::make('123456'),'loai_tk'=>'1','cmnd'=>'740868987','sdt'=>'0387589948','anh_dai_dien'=>'','dia_chi'=>'',]
        );
    }
}
