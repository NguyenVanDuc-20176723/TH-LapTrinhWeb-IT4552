<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableNhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien',function($table){
            
            $table->increments('MaNV');
            $table->char('TenNV',100);
            $table->char('ChucVu',100);
            $table->float('LuongNV',8,2);
            $table->date('NamSinh');
            $table->char('GioiTinh',30);
            $table->text('ChuThich');
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
        Schema::drop('nhanvien');
    }
}
