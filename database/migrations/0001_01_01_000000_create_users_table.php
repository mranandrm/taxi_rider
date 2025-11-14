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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('otp')->nullable();
            $table->string('country_code')->nullable();
            $table->string('contact_number')->nullable();
            $table->enum('gender',['male', 'female', 'other'])->nullable();
            $table->text('address')->nullable();
            $table->string('player_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('fleet_id')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamp('last_notification_seen')->nullable();
            $table->string('status', 20)->default('active');
            $table->tinyInteger('is_online')->nullable()->default('0');
            $table->tinyInteger('is_available')->nullable()->default('1');
            $table->tinyInteger('is_verified_driver')->nullable()->default('0');
            $table->string('uid')->nullable();
            $table->text('fcm_token')->nullable();
            $table->string('timezone')->nullable()->default('UTC');
            $table->dateTime('last_location_update_at')->nullable();
            $table->timestamp('otp_verify_at')->nullable();
            $table->timestamp('otp_expires_at')->nullable();
            $table->dateTime('last_actived_at')->nullable();
            $table->string('app_version')->nullable();
            $table->string('referral_code')->nullable();
            $table->string('partner_referral_code')->nullable();
            $table->double('currentHeading')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
