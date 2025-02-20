<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_registro');
            $table->string('nombre_insumo');
            $table->string('marca');
            $table->string('tipo');
            $table->decimal('valor_unidad',10,2);
            $table->string('cantidad');
            $table->decimal('total',10,2);
            $table->string('proveedor');
            $table->string('disponibilidad');
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
        Schema::dropIfExists('insumos');
    }
}
