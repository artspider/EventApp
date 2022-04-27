<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->longText('descripcion');
            $table->smallInteger('presentaciones');
            $table->smallInteger('min_certificar');
            $table->decimal('precio', 8, 2)->nullable();
            $table->string('fecha_inicio', 100);
            $table->string('fecha_cierre', 100);
            $table->integer('asistencia')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('events');
    }
}
