<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_orden', function (Blueprint $table) {
            $table->id('id_factura')->autoIncrement();

            $table->integer('id_persona');
            $table->foreign('id_persona')->references('id_persona')->on('persona');

            $table->integer('id_address_info');
            $table->foreign('id_address_info')->references('id_address_info')->on('address_info');
            
            $table->string('titular_comprador');
            $table->string('email_comprador');
            $table->string('tlf_comprador');
            $table->string('banco_emisor');
            $table->string('banco_receptor');
            $table->string('referencia', 100);
            $table->float('total_factura', 10, 2);
            $table->date('fecha_factura');
            $table->string('nota')->nullable();
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
        Schema::dropIfExists('factura_orden');
    }
}
