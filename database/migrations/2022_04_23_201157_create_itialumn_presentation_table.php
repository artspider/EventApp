<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItialumnPresentationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itialumn_presentation', function (Blueprint $table) {
            $table->primary(['itialumn_id','presentation_id']);
            $table->foreignId('itialumn_id')->constrained()->onDelete('cascade');
            $table->foreignId('presentation_id')->constrained()->onDelete('cascade');
            $table->boolean('pre-registro')->defaultValue(false);
            $table->boolean('checkin')->defaultValue(false);
            $table->smallInteger('calificacion')->nullable();
            $table->longText('resena')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itialumn_presentation');
    }
}
