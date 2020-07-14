<?php

use Illuminate\Database\Seeder;
use App\linhvuc;
class ThemLinhvucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Ngoại ngữ']
        );
        $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Công nghệ thông tin']
        );
        $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Tin học văn phòng']
        );
        $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Âm nhạc']
        );
        $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Thể thao - Sức khỏe']
        );
         $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Thiết kế']
        );
          $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Phát triển cá nhân']
        );
           $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Marketing']
        );
           $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Multimedia']
        );
           $linhvuc = linhvuc::create(
            ['ten_linh_vuc'=>'Nghệ thuật - Đời sống']
        );


    }
}
