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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->unsignedBigInteger('stylist_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->double('total_durasi')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->double('total_harga', 8, 0)->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('cek_kelengkapan')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
            $table->foreign('stylist_id')->references('id')->on('stylists')->onDelete('cascade');

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
