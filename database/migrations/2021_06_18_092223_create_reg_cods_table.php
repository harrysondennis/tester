<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegCodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_cods', function (Blueprint $table) {
            $table->unsignedBigInteger('cod_id');
            $table->unsignedBigInteger('reg_id');
            $table->foreign('cod_id')->references('id')->on('cods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('reg_id')->references('id')->on('regs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_cods');
    }
}
