<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDanhGiaKh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_gia_kh', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('nguoi_dung_id');
        $table->integer('so_sao');
        $table->text('noi_dung');
        $table->integer('khoa_hoc_id');
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
        Schema::dropIfExists('danh_gia_kh');
    }
}
