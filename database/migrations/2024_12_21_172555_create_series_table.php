<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->string('genere');
            $table->year('any');
            $table->text('descripcio');
            $table->float('puntuacio', 3, 1);
            $table->integer('temporades')->default(1);
            $table->integer('episodis')->default(1);
            $table->string('creadors')->nullable();
            $table->text('sinopsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
