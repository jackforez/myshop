<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgrtTaoBangSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensp');
            $table->integer('maloaisp');
            $table->integer('giasp');
            $table->integer('giakm');
            $table->string('img');
            $table->string('soluoc');
            $table->string('mota');
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
        Schema::dropIfExists('sanpham');
    }
}
