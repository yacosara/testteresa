<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChecklistdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklistdata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',50);
            $table->integer('checklistcategoria_id')->unsigned();
            $table->foreign('checklistcategoria_id')->references('id')->on('checklistcategoria');
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
        Schema::dropIfExists('checklistdata');
    }
}
