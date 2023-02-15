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
        Schema::create('tb_tickets', function (Blueprint $table) {
            $table->bigIncrements('idTicket');
		    $table->unsignedBigInteger('autor');
		    $table->unsignedBigInteger('departamento');
            $table->date('fechaLevantamiento');
		    $table->string('clasificacion');
            $table->unsignedBigInteger('encargado');
		    $table->string('estatus');
            $table->string('comentarios_cliente');
            $table->string('comentarios_al_cliente');
            $table->string('observaciones');
            $table->timestamps();
            $table->foreign('autor')->references('idcli')->on('tb_cliente')->onDelete('cascade');
		    $table->foreign('departamento')->references('idDepartamento')->on('tb_departamentos')->onDelete('cascade');
		    $table->foreign('encargado')->references('idaux')->on('tb_auxiliar')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ventas');
    }
};