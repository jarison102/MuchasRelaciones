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
        Schema::create('Proveedor', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_proveedor');
            $table->bigInteger('Compraid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->string('Cedula');
            $table->string('Nombre');
            $table->string('Tipo de proveedor');
            $table->string('Telefono')  ;
            $table->timestamps();
            $table->foreign('Compraid')->references('id_compra')->on('Compra')->onDelete("cascade");
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
        Schema::dropIfExists('Proveedor');
    }
};
