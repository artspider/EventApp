<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentators', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('universidad', 50);
            $table->string('carrera', 50);
            $table->string('trabajo_actual', 50);
            $table->string('especialidad', 50);
            $table->string('web', 100)->nullable();
            $table->string('temas', 100);
            $table->string('telefono', 20);
            $table->string('email', 100)->unique();
            $table->string('twitter', 50)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('linkedin', 50)->nullable();
            $table->string('foto', 100);
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
        Schema::dropIfExists('presentators');
    }
}
