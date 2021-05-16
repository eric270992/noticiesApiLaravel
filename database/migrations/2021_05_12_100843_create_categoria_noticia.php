<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaNoticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_noticia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("noticia_id")->unsigned();
            $table->bigInteger("categoria_id")->unsigned();
            $table->timestamps();


            $table->foreign('noticia_id')->references('id')->on('noticies');
            $table->foreign('categoria_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_noticia');
    }
}
