<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBaiKiemTra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_kiem_tra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thoi_gian_lam');
            $table->integer('chuong_id');
            $table->string('ten_bai_kt');
            $table->string('file_de_kt');
            $table->integer('trang_thai');
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
        Schema::dropIfExists('bai_kiem_tra');
    }
}
