<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id('id_carrito')->autoIncrement();

            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('persona');

            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('product');

            $table->integer('quantity');

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
        Schema::dropIfExists('carrito');
    }
}
