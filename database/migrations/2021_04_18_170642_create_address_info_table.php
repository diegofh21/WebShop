<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_info', function (Blueprint $table) {
            $table->id('id_address_info')->autoIncrement();
            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('persona');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
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
        Schema::dropIfExists('address_info');
    }
}
