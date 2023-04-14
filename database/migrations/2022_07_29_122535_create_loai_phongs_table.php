<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiPhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_phongs', function (Blueprint $table) {
            $table->id('maLoaiPhong');
            $table->string('loaiPhong');
            $table->string('hinhAnh');
            $table->integer('tinhTrang')->comment('0: Ẩn, 1: Hiện thị');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_phongs');
    }
}
