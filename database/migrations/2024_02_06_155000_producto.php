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
        Schema::create('Producto', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_producto');
            $table->bigInteger('Ventaid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->string('Nombre');
            $table->string('Tipo');
            $table->string('Precio unico');
            $table->timestamps();
            $table->foreign('Ventaid')->references('id_venta')->on('Venta')->onDelete("cascade");
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
        Schema::dropIfExists('Producto');
    }
};
