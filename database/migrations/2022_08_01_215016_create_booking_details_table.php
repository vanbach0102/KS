<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id('maCTDP');
            $table->integer('madatPhong');
            $table->integer('maKH');
            $table->integer('maPhong');
            $table->string('tenKH');
            $table->double('tienCoc');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->integer('tinhTrang');
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
        Schema::dropIfExists('booking_details');
    }
}
