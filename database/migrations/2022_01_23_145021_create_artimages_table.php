<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artimages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt');
            $table->tinyInteger('flag');
            $table->unsignedBigInteger('articles_id');
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
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
        Schema::dropIfExists('artimages');
    }
}
