<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticies', function (Blueprint $table) {
            $table->id();
            $table->string("titol");
            $table->text("contingut");
            $table->date("data_publicacio");
            $table->bigInteger("autor_id")->unsigned();
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticies');
    }
}
