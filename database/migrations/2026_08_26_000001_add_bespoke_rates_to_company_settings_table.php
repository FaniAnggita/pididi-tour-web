<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {
            $table->unsignedBigInteger('bespoke_rate_homestay')->default(600000)->after('logo_path');
            $table->unsignedBigInteger('bespoke_rate_hotel3')->default(950000)->after('bespoke_rate_homestay');
            $table->unsignedBigInteger('bespoke_rate_resort')->default(1800000)->after('bespoke_rate_hotel3');

            $table->decimal('bespoke_mult_bali', 4, 2)->default(1.00)->after('bespoke_rate_resort');
            $table->decimal('bespoke_mult_bajo', 4, 2)->default(1.40)->after('bespoke_mult_bali');
            $table->decimal('bespoke_mult_jogja', 4, 2)->default(0.85)->after('bespoke_mult_bajo');
            $table->decimal('bespoke_mult_toraja', 4, 2)->default(1.25)->after('bespoke_mult_jogja');
            $table->decimal('bespoke_mult_rajaampat', 4, 2)->default(2.10)->after('bespoke_mult_toraja');
            $table->decimal('bespoke_mult_custom', 4, 2)->default(1.00)->after('bespoke_mult_rajaampat');

            $table->integer('bespoke_min_pax_discount')->default(4)->after('bespoke_mult_custom');
            $table->integer('bespoke_discount_percent')->default(15)->after('bespoke_min_pax_discount');
        });
    }

    public function down(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {
            $table->dropColumn([
                'bespoke_rate_homestay',
                'bespoke_rate_hotel3',
                'bespoke_rate_resort',
                'bespoke_mult_bali',
                'bespoke_mult_bajo',
                'bespoke_mult_jogja',
                'bespoke_mult_toraja',
                'bespoke_mult_rajaampat',
                'bespoke_mult_custom',
                'bespoke_min_pax_discount',
                'bespoke_discount_percent',
            ]);
        });
    }
};
