<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNhanTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_tin', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('nguoi_dung_id');
            $table->integer('khoa_hoc_id');
            $table->string('noi_dung');
            $table->integer('nguoi_gui');
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
        Schema::dropIfExists('nhan_tin');
    }
}
