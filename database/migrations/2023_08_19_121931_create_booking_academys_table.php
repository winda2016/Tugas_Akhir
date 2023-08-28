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
        Schema::create('booking_academys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->unsignedBigInteger('angkatan_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->integer('total')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('cek_kelengkapan')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
            $table->foreign('angkatan_id')->references('id')->on('angkatans')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_academys');
    }
};
