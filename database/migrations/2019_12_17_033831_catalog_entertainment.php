<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatalogEntertainment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('catalog_entertainment', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('catalog_id');
          $table->unsignedBigInteger('entertainment_id');
          $table->unsignedBigInteger('rank');
          $table->timestamps();
          $table->unique(['entertainment_id', 'catalog_id']);
          $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('cascade');
          $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_entertainment');
    }
}
