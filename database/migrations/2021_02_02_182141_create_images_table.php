<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('size')->nullable();
            $table->string('path')->nullable();
            $table->integer('imageable_id')->nullable()->unsigned();
            $table->string('imageable_type')->nullable();
            $table->integer('album_id')->nullable()->unsigned();
            $table->integer('shop_id')->nullable()->unsigned();
            $table->integer('food_id')->nullable()->unsigned();
            $table->string('image')->nullable();
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
