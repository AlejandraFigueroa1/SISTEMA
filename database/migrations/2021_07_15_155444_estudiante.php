<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->integer('id')->notnull();


            $table -> string('nombre');
            $table -> Integer('codigo')->unique()->default(9)->notnull();
            $table -> string('carrera')->nullable();
            $table -> integer('creditos_cursados')->min(0);
            $table -> string('correo')->unique()->nullable();
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
        //
    }
}
