<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCtHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('khoa_hoc_id');
            $table->integer('hoa_don_id');
            $table->integer('ma_kich_hoat');
            $table->integer('trang_thai');
            $table->string('tien_do');
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
        Schema::dropIfExists('ct_hoa_don');
    }
}
