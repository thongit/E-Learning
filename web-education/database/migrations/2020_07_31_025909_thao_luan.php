<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThaoLuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thao_luan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nguoi_dung_id');
            $table->text('noi_dung');
            $table->integer('noi_dung_id');
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
        Schema::dropIfExists('thao_luan');
    }
}
