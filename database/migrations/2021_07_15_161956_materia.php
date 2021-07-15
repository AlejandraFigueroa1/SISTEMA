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
            $table->integer('id');

            $table->integer('creditos')->notnull()->min(1);
            $table->string('nombre_materia')->notnull();
            $table->string('profesor')->notnull();
            $table->string('turno')->notnull();
            $table->boolean('disponible')->notnull();
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
