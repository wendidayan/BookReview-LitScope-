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
        Schema::create('reviews', function (Blueprint $table) {
            $table->string('review_code')->primary(); // review_code as the primary key (unique and non-incrementing)
            $table->text('comments'); // Column for the review comments
            $table->integer('rate'); // Column for the rating (e.g., 1 to 5)
            $table->integer('likes')->default(0); // Column for the number of likes (defaults to 0)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
