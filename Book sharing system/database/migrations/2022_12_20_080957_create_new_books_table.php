<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('isbn')->nullable();
            $table->string('publish_year')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('publisher_id')->nullable();
            $table->unsignedInteger('translator_id')->nullable();
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
        Schema::dropIfExists('new_books');
    }
};
