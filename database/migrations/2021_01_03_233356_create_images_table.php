<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     * esta tabla tiene las imagenes de todas las tablas, uso relacion polimorfica
     * no tiene relacion con otras tablas, si no que pongo la data (tabla a la q pertenece)
     * en un imageable_type
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');

            $table->unsignedBigInteger('imageable_id'); //relacion polimorfica
            $table->unsignedBigInteger('imageable_type'); //aca va el nombre del modelo

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
        Schema::dropIfExists('images');
    }
}
