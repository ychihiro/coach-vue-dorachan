<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('count');
            $table->string('fullname');
            $table->char('postcode', 7);
            $table->string('prefecture');
            $table->string('city');
            $table->string('building_name')->nullable();
            $table->date('delivery_date')->nullable();
            $table->time('delivery_time')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
