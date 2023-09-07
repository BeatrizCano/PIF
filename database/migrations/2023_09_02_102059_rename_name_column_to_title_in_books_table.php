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
        //1.Agregar una nueva columna "title"
        Schema::table('books', function (Blueprint $table) {
            $table->string('title');
        });

        //2.Copiar los datos de la columna "name" a la nueva columna "title"
        \DB::statement("UPDATE books SET title = name");

        //3.Eliminar la columna "name"
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Migración de reversión se encarga de cambiar el nombre de la columna "title" a "name" de nuevo si es necesario
        Schema::table('books', function (Blueprint $table) {
            $table->renameColumn('title', 'name');
        });
    }
};
