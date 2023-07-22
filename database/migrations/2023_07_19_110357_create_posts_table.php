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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('video')->nullable();
            $table->string('img');
            $table->text('desc');
            $table->string('slug')->unique();
            $table->integer('status')->nullable();
            $table->boolean('visibility')->default(true);
            $table->string('author');
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
