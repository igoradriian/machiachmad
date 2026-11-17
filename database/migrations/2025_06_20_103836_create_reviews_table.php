<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // Kolom user_id ditambahkan di migrasi 2025_06_20_221426_add_user_id_to_reviews_table
            $table->foreignId('gallery_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->tinyInteger('rating'); // nilai 1-5
            $table->text('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
