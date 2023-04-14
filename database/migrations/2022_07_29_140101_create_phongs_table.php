<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->id('maPhong');
            $table->integer('maLoaiPhong');
            $table->string('soPhong');
            $table->double('giaPhong');
            $table->integer('status')->comment('0: Chưa đặt, 1: Đã đặt');
            $table->string('hinhAnhPhong');
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
        Schema::dropIfExists('phongs');
    }
}
