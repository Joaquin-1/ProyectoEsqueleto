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
        Schema::create('seguidos', function (Blueprint $table) {
            $table->foreignId('seguidor_id')->constrained('users');
            $table->foreignId('seguido_id')->constrained('users');
            $table->primary(['seguidor_id', 'seguido_id']);
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
        Schema::dropIfExists('seguidos');
    }
};
