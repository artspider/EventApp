<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->longText('descripcion');
            $table->smallInteger('duracion');
            $table->text('fecha', 50);
            $table->text('hora', 50);
            $table->integer('asistencia');
            $table->smallInteger('calificacion');
            $table->unsignedBigInteger('presentator_id');
            $table->unsignedBigInteger('event_id');
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
        Schema::dropIfExists('presentations');
    }
}
