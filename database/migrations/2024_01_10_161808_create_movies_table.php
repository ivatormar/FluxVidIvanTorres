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
        Schema::create('movies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',50);
            $table->integer('year');
            $table->text('plot');
            $table->float('rating',2,1);
            $table->boolean('visibility');
            $table->timestamps();
            $table->foreignId('director_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('director_id');
        });
        Schema::dropIfExists('movies');
    }
};
