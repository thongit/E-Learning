<?php

use Illuminate\Database\Seeder;
use App\ketquakt;
class ThemKetQuaKTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketquakt = ketquakt::create(
        	['nguoi_dung_id'=>'25','diem'=>'7/10','bai_kiem_tra_id'=>'1','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
        $ketquakt = ketquakt::create(
        	['nguoi_dung_id'=>'25','diem'=>'4/10','bai_kiem_tra_id'=>'2','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
        $ketquakt = ketquakt::create(
        	['nguoi_dung_id'=>'26','diem'=>'3/10','bai_kiem_tra_id'=>'3','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
        $ketquakt = ketquakt::create(
        	['nguoi_dung_id'=>'26','diem'=>'9/10','bai_kiem_tra_id'=>'4','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
        $ketquakt = ketquakt::create(
        	['nguoi_dung_id'=>'26','diem'=>'4/10','bai_kiem_tra_id'=>'5','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
        $ketquakt = ketquakt::create(
<<<<<<< Updated upstream
        	['nguoi_dung_id'=>'26','diem'=>'2/10','bai_kiem_tra_id'=>'6','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );
=======
            ['nguoi_dung_id'=>'26','diem'=>'2/10','bai_kiem_tra_id'=>'6','bai_lam'=>'ACAABCDBDCABDACCBBCD']
        );

>>>>>>> Stashed changes
    }
}
