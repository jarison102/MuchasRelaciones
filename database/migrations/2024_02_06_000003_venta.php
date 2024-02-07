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
        Schema::create('Venta', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_venta');
            $table->bigInteger('Clienteid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->string('Nombre');
            $table->string('Tipo');
            $table->timestamps();

            $table->foreign('Clienteid')->references('id_Clientes')->on('Clientes')->onDelete("cascade");

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
        Schema::dropIfExists('Venta');
    }
};
