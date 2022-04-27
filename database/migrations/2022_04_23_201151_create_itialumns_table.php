<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItialumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itialumns', function (Blueprint $table) {
            $table->id();
            $table->string('numcontrol', 50);
            $table->string('paterno', 50);
            $table->string('materno', 50);
            $table->string('nombre', 50);
            $table->string('carrera', 100);
            $table->smallInteger('semestre');
            $table->string('curp', 50);
            $table->string('email', 100)->unique();
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('itialumns');
    }
}
