<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang',function($table){
            //$table->id();
            $table->increments('MaKH');
            $table->char('TenKH',100);
            $table->char('CMND',100);
            $table->char('QuocTich',100);
            $table->integer('Tuoi');
            $table->char('SDT',12);
            $table->integer('MaPhong')->unsigned();
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
        Schema::drop('khachhang');
    }
}
