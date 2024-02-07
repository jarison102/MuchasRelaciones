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
        Schema::create('Restaurante', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id_Restaurante');
            $table->string('Nombre');
            $table->string('Tipo');
            $table->bigInteger('Compraid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->bigInteger('Ventaid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->bigInteger('Empleadoid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de X.
            $table->timestamps();
            // Crea una restricción de clave externa que relaciona la columna 'categoria_id' en la tabla 'libros'
            // con la columna 'id' en la tabla 'categorias' y establece la acción de eliminación en cascada.
            /*
                        $table->foreign('personaid'): Esto define una clave foránea en la columna personaid de la tabla actual.
                        ->references('id'): Esto especifica que la clave foránea personaid hace referencia a la columna id.
                        ->on('persona'): Esto especifica que la columna id a la que se hace referencia está en la tabla persona.
                        ->onDelete("cascade"): Esto especifica que cuando se elimine un registro en la tabla persona, también se deben eliminar todos los registros en la tabla actual que tengan el mismo personaid.
            */
            $table->foreign('Ventaid')->references('id_venta')->on('Venta')->onDelete("cascade");
            $table->foreign('Empleadoid')->references('id_empleado')->on('empleados')->onDelete("cascade");
            $table->foreign('Compraid')->references('id_compra')->on('Compra')->onDelete("cascade");
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Restaurante');
    }
};
