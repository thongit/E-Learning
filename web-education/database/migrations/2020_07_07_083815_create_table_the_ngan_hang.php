<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTheNganHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_ngan_hang', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('nguoi_dung_id');
            $table->integer('so_tai_khoan');
            $table->string('ten_tren_the');
            $table->string('ten_ngan_hang');
            $table->string('chi_nhanh');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_ngan_hang');
    }
}
