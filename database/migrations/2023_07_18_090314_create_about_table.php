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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title');
            $table->text('about_content');
            $table->string('card_title');
            $table->string('card_content');
            $table->string('card_icon');
            $table->string('employes_name');
            $table->string('employes_avatar');
            $table->string('employes_position');
            $table->text('employes_about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
