<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class App\ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_listarep', function (Blueprint $table) {
            $table->integer('filme_id')->unsigned()->index();
            $table->foreign('filme_id')->references('id')->on('filme')->onDelete('cascade');
            $table->integer('listarep_id')->unsigned()->index();
            $table->foreign('listarep_id')->references('id')->on('listarep')->onDelete('cascade');
            $table->primary(['filme_id', 'listarep_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filme_listarep');
    }
}