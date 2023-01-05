<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extratos', function (Blueprint $table)
        {
            $table->id();
            $table->integer('operacao');
            $table->unsignedBigInteger('operacao_id');
            $table->timestamps();

            $table->foreign('operacao_id')->references('id')->on('operacoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extratos');
    }
}
