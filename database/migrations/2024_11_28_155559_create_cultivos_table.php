<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('nombre');
            $table->string('tipo');
            $table->decimal('area',10,2);
            $table->decimal('presupuesto',15,2);
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
        Schema::dropIfExists('cultivos');
    }
}
