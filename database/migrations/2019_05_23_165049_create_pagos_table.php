<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_cita');
            $table->unsignedBigInteger('id_tratamiento');
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('monto');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_cita')->references('id')->on('citas');
            $table->foreign('id_tratamiento')->references('id')->on('tratamientos');
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
        Schema::dropIfExists('pagos');
    }
}
