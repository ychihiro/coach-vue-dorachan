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
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->text('description')->nullable();
            $table->integer('cooperation')->nullable();
            $table->integer('extroversion')->nullable();
            $table->integer('sincerity')->nullable();
            $table->integer('openness')->nullable();
            $table->integer('nerve')->nullable();
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
