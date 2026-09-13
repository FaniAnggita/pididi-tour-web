<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('PT VAYANA WISATA INDONESIA');
            $table->string('nib')->nullable();
            $table->string('npwp')->nullable();
            $table->string('bank_name')->default('Bank BRI');
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_holder')->nullable();
            $table->text('office_address')->nullable();
            $table->string('operational_hours')->nullable();
            $table->string('phone_wa')->nullable();
            $table->string('email')->nullable();
            $table->text('google_maps_iframe')->nullable();
            $table->string('tagline')->default('Pilih Destinasi, Dapat Inspirasi');
            $table->text('bio')->nullable();
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_settings');
    }
};
