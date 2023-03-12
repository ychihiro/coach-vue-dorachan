<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diagnosis_id')->constrained();
            $table->string('name');
            $table->string('path');
            $table->text('description');
            $table->integer('cooperation');
            $table->integer('extroversion');
            $table->integer('sincerity');
            $table->integer('openness');
            $table->integer('nerve');
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
        Schema::dropIfExists('characters');
    }
}
