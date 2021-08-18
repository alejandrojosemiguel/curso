<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEdadToCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            // Agrego columnas
            // $table->string('edad')->nullable();
            // $table->string('email')->nullable();    
            // Agrego columnas a una determinada posicion        
            $table->string('edad')->nullable()->after('apellido');
            $table->string('email')->nullable()->after('apellido');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            // Elimino las mismas columnas
            $table->dropColumn('edad');
            $table->dropColumn('email');
        });
    }
}
