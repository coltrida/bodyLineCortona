<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corsi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_corso');
            $table->string('descrizione');
            $table->string('livello');
            $table->integer('staff_id')->unsigned();
            $table->string('colore');
            $table->timestamps();
            //$table->foreign('staff_id')->on('staffs')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corsi');
    }
}
