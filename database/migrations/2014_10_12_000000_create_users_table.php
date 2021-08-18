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
            $table->id(); // integer unsigned increment
            $table->string('name',100); // varchar (100)
            $table->string('email')->unique(); // indice unico
            $table->timestamp('email_verified_at')->nullable(); // permite valores null
            $table->string('password');
            $table->rememberToken(); //columna varchar(100)
            $table->timestamps(); // crea dos columnas de fecha: create_at, updated_at
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
