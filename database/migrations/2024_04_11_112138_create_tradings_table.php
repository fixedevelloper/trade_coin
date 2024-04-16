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
        Schema::create('tradings', function (Blueprint $table) {
            $table->id();
            $table->string('type_trade');
            $table->float('amount');
            $table->double('quantity');
            $table->string('status')->default(\App\Models\Trading::PENDING);
            $table->string('proof')->nullable();
            $table->foreignId('crypto_id')->nullable()->constrained("crypto_monaires",'id')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tradings');
    }
};
