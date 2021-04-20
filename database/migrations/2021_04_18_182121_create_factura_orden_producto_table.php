<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaOrdenProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_orden_producto', function (Blueprint $table) {
            $table->id('id_orden_producto')->autoIncrement();
            $table->integer('id_factura');
            $table->foreign('id_factura')->references('id_factura')->on('factura_orden');
            $table->integer('cantidad');
            $table->float('precio_unitario', 10, 2);
            $table->float('precio_final', 10, 2);
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
        Schema::dropIfExists('factura_orden_producto');
    }
}
