<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntertainmentTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entertainment_tag', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('entertainment_id');
          $table->unsignedBigInteger('tag_id');
          $table->timestamps();
          $table->unique(['entertainment_id', 'tag_id']);
          $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade');
          $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('entertainment_tag');
    }
}
