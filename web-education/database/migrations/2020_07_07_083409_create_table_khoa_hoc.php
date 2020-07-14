<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKhoaHoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoa_hoc', function (Blueprint $table) {
           $table->increments('id');
            $table->string('ten_khoa_hoc');
            $table->integer('gia');
            $table->integer('nguoi_dung_id');
            $table->integer('linh_vuc_id');
            $table->integer('trang_thai');
            $table->string('hinh_anh');
            $table->text('mo_ta_chi_tiet');
            $table->string('ngon_ngu');
            $table->string('muc_do');
            $table->string('mo_ta_ngan');
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
        Schema::dropIfExists('khoa_hoc');
    }
}
