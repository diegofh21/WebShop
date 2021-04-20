<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->id('id_configuracion')->autoIncrement();
            $table->string('nombre_tienda')->nullable();
            $table->string('rif')->nullable();
            $table->string('email_tienda')->nullable();
            $table->string('telefono_tienda')->nullable();
            $table->string('instagram')->nullable();
            $table->string('url_instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('url_twitter')->nullable();
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
        Schema::dropIfExists('configuracion');
    }
}
