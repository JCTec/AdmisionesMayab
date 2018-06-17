<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileentries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->string('filename');
            $table->string('descripcion');
            $table->string('mime');
            $table->integer('type');
            $table->longtext('base64')->nullable();
            $table->string('original_filename');
            $table->boolean('aprobado')->nullable();
            $table->foreign('idUser')->references('id')->on('users');
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('fileentries');
    }
}
