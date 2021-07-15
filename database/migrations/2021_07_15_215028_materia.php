<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('creditos')->notnull()->minimum(1);
            $table->string('nombre_materia')->notnull();
            $table->string('profesor')->nullable();
            $table->string('Turno')->notnull();
            $table->boolean('disponible')->unique()->notnull();


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
