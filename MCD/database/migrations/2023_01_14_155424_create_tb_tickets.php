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
		    $table->string('clasificacion');
            $table->unsignedBigInteger('encargado')->nullable();
		    $table->string('estatus')->default('Pendiente');
            $table->string('comentarios_cliente');
            $table->string('comentarios_al_cliente')->default('Sin comentarios');
            $table->string('observaciones')->default('Sin observaciones');
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
        Schema::dropIfExists('tb_tickets');
    }
};
