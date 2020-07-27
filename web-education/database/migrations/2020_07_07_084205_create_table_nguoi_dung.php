<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNguoiDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung', function (Blueprint $table) {
             $table->increments('id');
            $table->string('ho_ten');
            $table->string('email');
            $table->string('mat_khau');
            $table->integer('loai_tk');
            $table->string('cmnd');
            $table->string('sdt');
            $table->string("anh_dai_dien");
            $table->string("dia_chi");
            $table->text('gioi_thieu');
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
        Schema::dropIfExists('nguoi_dung');
    }
}
