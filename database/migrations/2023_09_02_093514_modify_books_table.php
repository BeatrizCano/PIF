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
        //Modificar tipo de la columna
        Schema::table('books', function (Blueprint $table) {

            $table->text('description')->change();
            $table->bigInteger('year')->change();
            $table->text('image')->change();
            $table->float('price', 10, 2)->change();
            $table->bigInteger('stock')->change();

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
