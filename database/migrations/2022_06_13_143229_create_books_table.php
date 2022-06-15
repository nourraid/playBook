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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->string('publisher');
            $table->integer('edition');
            $table->string('language');
            $table->integer('page_number');
            $table->integer('available');
            $table->decimal('price');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('imageName');
            $table->string('bookPDF');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
