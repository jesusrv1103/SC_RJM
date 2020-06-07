<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('folio');
            $table->date('fecha');
            $table->BigInteger('hora_atencion_id')->unsigned();
            $table->foreign('hora_atencion_id')->references('id')->on('horas_de_atencion');
            $table->BigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->BigInteger('t_tramite_id')->unsigned();
            $table->foreign('t_tramite_id')->references('id')->on('tipo_tramites');
            $table->enum('medio_agenda', ['web', 'telefono']);
            $table->enum('estado', ['agendada', 'atendida']);
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
        Schema::dropIfExists('citas');
    }
}
