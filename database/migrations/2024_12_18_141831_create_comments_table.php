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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('book_id'); // Foreign key for the related book
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key for the user (nullable for guest comments)
            $table->unsignedBigInteger('parent_id')->nullable(); // Foreign key for parent comment
            $table->text('comment'); // Comment text
            $table->integer('rating')->nullable(); // Rating column
            $table->timestamps(); // Created at and Updated at timestamps

            // Define foreign key constraints
            $table->foreign('book_id')->references('id')->on('landing_views')->onDelete('cascade'); // For books
            $table->foreign('user_id')->references('id')->on('user_logins')->onDelete('cascade'); // For users
            $table->foreign('parent_id')->references('id')->on('comments')->onDelete('cascade'); // For parent comments
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
