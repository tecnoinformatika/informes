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
        Schema::create('simats', function (Blueprint $table) {
            $table->id();
            $table->integer('ano');
            $table->string('etc');
            $table->string('estado');
            $table->string('jerarquia');
            $table->string('institucion');
            $table->integer('dane');
            $table->string('calendario');
            $table->string('sector');
            $table->string('sede');
            $table->integer('codigo_dane_sede');
            $table->integer('consecutivo');
            $table->string('zona_sede');
            $table->string('jornada');
            $table->string('grado_cod');
            $table->string('grupo');
            $table->string('modelo');
            $table->string('motivo');
            $table->datetime('fechaini');
            $table->datetime('fechafin');
            $table->string('nui');
            $table->string('estrato');
            $table->string('sisben_iv');
            $table->string('per_id');
            $table->string('doc');
            $table->string('tioodoc');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('genero');
            $table->datetime('fecha_nacimiento');
            $table->string('barrio');
            $table->string('eps');
            $table->string('tipo_de_sangre');
            $table->string('matriculacontratada');
            $table->string('fuente_recursos');
            $table->string('internado');
            $table->string('num_contratado');
            $table->string('apoyo_academico_especial');
            $table->string('srpa');
            $table->string('discapacidad');
            $table->string('pais_origen');
            $table->string('correo');    
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
        Schema::dropIfExists('simats');
    }
};
