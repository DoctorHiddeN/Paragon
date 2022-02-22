<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelBetweenArticleImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_artimages', function (Blueprint $table) {
            $table->unsignedBigInteger('articles_id');
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
            $table->unsignedBigInteger('artimages_id');
            $table->foreign('artimages_id')->references('id')->on('artimages')->onDelete('cascade');
            $table->unique('artimages_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rel_between_article_image');
    }
}
