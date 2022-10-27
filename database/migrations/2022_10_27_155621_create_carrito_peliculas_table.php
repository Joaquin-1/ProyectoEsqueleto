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
        Schema::create('carrito_peliculas', function (Blueprint $table) {
            $table->foreignId('carrito_id')->constrained('carritos');
            $table->foreignId('pelicula_id')->constrained('peliculas');
            $table->primary(['carrito_id', 'pelicula_id']);
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
        Schema::dropIfExists('carrito_peliculas');
    }
};
