<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOsocialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osociales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',60);
            $table->string('telefono',30);
            $table->string('contacto',60);
            $table->string('email',30);
            $table->string('calle',60);
            $table->string('nro',10);
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
        Schema::dropIfExists('osociales');
    }
}
