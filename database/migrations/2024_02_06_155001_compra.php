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
        Schema::create('Compra', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_compra');
            $table->bigInteger('Productoid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->string('Productos Comprados');
            $table->string('Tipo de compra');
            $table->string('Valor Compra');
            $table->timestamps();
            $table->foreign('Productoid')->references('id_producto')->on('Producto')->onDelete("cascade");
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
        Schema::dropIfExists('Compra');
    }
};
