<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_producto')->autoIncrement();

            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id_category')->on('category');

            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id_status')->on('status');

            $table->string('nombre_producto', 255);
            $table->float('precio_producto', 10, 2);
            $table->integer('cantidad_producto');
            $table->text('descripcion_producto');
            
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
        Schema::dropIfExists('products');
    }
}
