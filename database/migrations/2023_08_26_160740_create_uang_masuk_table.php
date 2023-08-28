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
        Schema::create('uang_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id')->nullable();
            $table->date('tanggal_pemasukan');
            $table->decimal('total_uang_masuk', 10, 2);
            $table->timestamps();

            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_masuk');
    }
};
