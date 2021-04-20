<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user')->autoIncrement();

            $table->integer('id_tipo_usuario')->unsigned();
            $table->foreign('id_tipo_usuario')->references('id_tipo_usuario')->on('tipo_usuarios');

            $table->integer('id_persona')->unsigned();
            $table->foreign('id_persona')->references('id_persona')->on('persona');

            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id_status')->on('status');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 32);
            $table->date('register_date');
            $table->rememberToken();
            $table->timestamps(); //created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
