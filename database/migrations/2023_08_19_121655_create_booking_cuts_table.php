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
        Schema::create('booking_cuts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('layanan_id');
            $table->unsignedBigInteger('stylist_id');
            $table->unsignedBigInteger('treatment_id');
            $table->double('jam');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
            $table->foreign('stylist_id')->references('id')->on('stylists')->onDelete('cascade');
            $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_cuts');
    }
};
