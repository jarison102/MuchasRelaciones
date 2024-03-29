<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Clientes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_Clientes');
            $table->string('Nombre');
            $table->string('Cedula');
            $table->string('Telefono');
            //id_venta
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
        //
        Schema::dropIfExists('Clientes');
    }
};
