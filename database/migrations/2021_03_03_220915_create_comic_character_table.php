<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_character', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("comic_id");
            $table->unsignedBigInteger("character_id");

            $table->foreign("comic_id")
              ->references("id")
              ->on("comics")
              ->onDelete("cascade");

              $table->foreign("character_id")
                ->references("id")
                ->on("characters")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_character');
    }
}
