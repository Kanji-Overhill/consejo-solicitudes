<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseñosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('diseños', function (Blueprint $table) {
            //Campos Compartidos
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_solicitud');
            $table->foreign("id_solicitud")
                    ->references("id")
                    ->on("solicitudes")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
            $table->date('fecha_estimada_entrega');
            $table->string('tipo_solicitud');
            $table->string('tipo_formato');
            $table->string('titulo');
            $table->string('link_docs');
            $table->text('descripcion');

            /*Campos Diploma*/
            $table->string('titulo_diploma');
            $table->string('firma');

            //Campos Invitacion
            $table->string('fecha_evento');
            $table->string('hora_evento');
            $table->string('evento_inscripcion');
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
    }
}
