<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return vpopmail_del_domain(domain)
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',40);
            $table->string('apellido',40);
            $table->date('fechanaci');
            $table->integer('tipodocumento_id')->unsigned();
            $table->integer('nacionalidad_id')->unsigned();
            $table->integer('religion_id')->unsigned();
            $table->integer('estadocivil_id')->unsigned();
            $table->integer('obrasocial_id')->unsigned();            

            
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumentos');
            $table->foreign('religion_id')->references('id')->on('religiones');
            $table->foreign('estadocivil_id')->references('id')->on('estadoscivil');
            $table->foreign('obrasocial_id')->references('id')->on('osociales');

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
        Schema::dropIfExists('pacientes');
    }
}
