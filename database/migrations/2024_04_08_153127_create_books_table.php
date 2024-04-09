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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('slug', 128)->unique();
            $table->text('description')->nullable();
            $table->string('author', 128)->nullable();
            $table->string('image', 255)->nullable();
            $table->float('rating', 4, 2)->default(0.00)->unsigned();
            $table->integer('votes')->default(0)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
