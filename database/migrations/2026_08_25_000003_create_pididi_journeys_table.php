<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pididi_journeys', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('THE JOGJA YOU HAVEN\'T MET');
            $table->string('tagline')->default('Datang sebagai wisatawan. Pulang membawa cerita.');
            $table->string('theme')->default('Menemukan Jogja melalui manusia, karya, rasa, dan cerita.');
            $table->integer('min_pax')->default(8);
            $table->integer('max_pax')->default(12);
            $table->decimal('price', 12, 2)->default(3650000);
            $table->string('duration')->default('3 Days 2 Nights');
            $table->text('batch_schedule_info')->nullable();
            $table->json('principles_content')->nullable();
            $table->text('journey_book_info')->nullable();
            $table->text('voucher_info')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pididi_journeys');
    }
};
