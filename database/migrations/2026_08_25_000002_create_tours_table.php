<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('curated'); // curated, essential, bespoke
            $table->string('duration')->default('3H 2M');
            $table->string('location');
            $table->decimal('starting_price', 12, 2)->default(0);
            $table->integer('min_pax')->default(2);
            $table->decimal('rating', 3, 2)->default(4.9);
            $table->integer('reviews_count')->default(100);
            $table->json('highlight_badges')->nullable(); // array of badges e.g. ["Village Life", "Taste Local"]
            $table->string('cover_image')->nullable();
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
            $table->json('inclusions')->nullable();
            $table->json('exclusions')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });

        Schema::create('tour_itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->integer('day_number');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('tour_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->string('image_url');
            $table->string('caption')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tour_galleries');
        Schema::dropIfExists('tour_itineraries');
        Schema::dropIfExists('tours');
    }
};
