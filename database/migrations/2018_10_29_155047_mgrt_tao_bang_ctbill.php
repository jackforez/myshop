<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MgrtTaoBangCtbill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCtbill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idbill');
            $table->integer('idsp');
            $table->integer('soluong');
            $table->integer('giasp');
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
        Schema::dropIfExists('tblCtbill');
    }
}
