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
        Schema::create('users', function (Blueprint $table) {
            $table->id("id");
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->integer('user_type')->comment("0:admin,1:customer");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->boolean('activated')->default(false);
            $table->string('city')->nullable();
            $table->date('date_born')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('photo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->boolean('phone_verified')->default(false);
            $table->boolean('email_verified')->default(false);
            $table->string('unique_number')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
