<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstudianteMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_materia_table', function (Blueprint $table) {
            $table->id();

            $table->foreignId('estudiante_id')->constraint();
            $table->foreignId('materia_id')->constraint();







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
