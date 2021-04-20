<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_categories', function (Blueprint $table) {
            $table->id('id_related')->autoIncrement();

            $table->integer('id_father')->unsigned();
            $table->foreign('id_father')->references('id_category')->on('category');

            $table->integer('id_son')->unsigned();
            $table->foreign('id_son')->references('id_category')->on('category');
            
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
        Schema::dropIfExists('related_categories');
    }
}
