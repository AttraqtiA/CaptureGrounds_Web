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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(true);
            $table->string('review')->nullable(false);
            $table->integer('rating')->nullable(false);
            $table->date('date')->nullable(false);
            $table->unsignedBigInteger('serviceOrder_id');
            $table->foreign('serviceOrder_id')->references('id')->on('service_orders')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
