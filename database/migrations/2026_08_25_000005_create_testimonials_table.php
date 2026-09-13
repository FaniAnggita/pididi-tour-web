<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('city')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('package_name')->nullable();
            $table->integer('rating')->default(5);
            $table->text('content');
            $table->boolean('is_verified')->default(true);
            $table->string('trip_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
