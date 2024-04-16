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
        Schema::create('crypto_monaires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->string('code')->unique();
            $table->string('last_price');
            $table->string('price');
            $table->string('iconUrl');
            $table->string('change');
            $table->string('btcPrice');
            $table->string('rank');
            $table->string('marketCap');
            $table->string('color');
            $table->boolean('status')->default(false);
            $table->double('taux')->default('0.0')->nullable();
            $table->double('taux_sell')->default('0.0')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_monaires');
    }
};
