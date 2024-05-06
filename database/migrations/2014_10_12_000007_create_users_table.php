<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->bigInteger('phoneNumber')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('profilePicture')->nullable(true); // AKU SET NULLABLE YA INI
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('isLogin',['0','1'])->default('0');
            $table->enum('isActive',['0','1'])->default('0');
            $table->enum('isMembership',['0','1'])->default('0');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade');
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
