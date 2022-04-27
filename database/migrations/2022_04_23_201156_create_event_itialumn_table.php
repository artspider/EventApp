<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventItialumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_itialumn', function (Blueprint $table) {
            $table->primary(['itialumn_id','event_id']);
            $table->foreignId('itialumn_id')->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->smallInteger('presentaciones')->nullable();
            $table->String('recibo',100)->nullable();
            $table->boolean('verificado')->default(false);
            $table->longText('espectativas')->nullable();
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
        Schema::dropIfExists('event__itialumns');
    }
}
