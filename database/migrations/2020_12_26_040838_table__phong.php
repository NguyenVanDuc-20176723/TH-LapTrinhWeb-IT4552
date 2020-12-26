<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePhong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong',function($table){
            //$table->id();
            $table->increments('MaPhong');
            $table->char('TenPhong',100);
            $table->float('GiaPhong',8,2);
            $table->char('TinhTrang',100);
            $table->text('ChuThich');
            $table->integer('MaNV')->unsigned();
            $table->integer('MaDV')->unsigned();
            $table->integer('MaLP')->unsigned();
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
        Schema::drop('phong');
    }
}
