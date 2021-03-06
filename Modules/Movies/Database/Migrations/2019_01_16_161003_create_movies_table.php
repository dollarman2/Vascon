<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('slug', 190)->unique();
            $table->string('title')->nullable();
            $table->string('release_date')->nullable();
            $table->string('genre')->nullable();
            $table->string('duration')->nullable();
            $table->string('language')->nullable();
            $table->text('description')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('movies');
    }
}
