<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_emergencias', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('firstName')->nullable();
            $table->string('secondName')->nullable();
            $table->string('firstLastName')->nullable();
            $table->string('secondLastName')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
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
        Schema::dropIfExists('contacto_emergencias');
    }
}
