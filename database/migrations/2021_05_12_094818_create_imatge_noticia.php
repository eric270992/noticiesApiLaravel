<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImatgeNoticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imatge_noticia', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('imatge_id')->unsigned();
            $table->bigInteger('noticia_id')->unsigned();
            $table->timestamps();

            $table->foreign('imatge_id')->references('id')->on('imatges');
            $table->foreign('noticia_id')->references('id')->on('noticies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imatge_noticia');
    }
}
