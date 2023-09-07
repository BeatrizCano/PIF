<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('books', function (Blueprint $table) {

            $table->engine='InnoDB';
            $table->bigIncrements('id');

            $table->bigInteger('category_id')->unsigned();
            
            $table->string('name');
            $table->string('authors');
            $table->string('description');
            $table->string('language');
            $table->string('publisher');
            $table->string('year');
            $table->string('isbn');            
            $table->string('image');
            $table->string('price');
            $table->string('stock');
            $table->string('status');
               
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
