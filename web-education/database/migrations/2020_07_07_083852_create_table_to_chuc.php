<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToChuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_chuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_to_chuc');
            $table->integer('ma_so_thue');
            $table->string('dia_chi');
            $table->string('nguoi_lien_he');
            $table->string('emal_nlh');
            $table->integer('sdt_nlh');
            $table->integer('trang_thai');
            $table->integer('nguoi_dung_id');
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
        Schema::dropIfExists('to_chuc');
    }
}
