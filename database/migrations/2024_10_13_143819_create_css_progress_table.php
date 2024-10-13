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
        Schema::create('css_progress', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID column
            $table->unsignedBigInteger('user_id');
            $table->string('question');
            $table->string('user_answer');
            $table->string('correct_answer');
            $table->boolean('is_correct');
            $table->unsignedInteger('correct_count')->default(0);
            $table->unsignedInteger('wrong_count')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('css_progress');
    }
};
