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
        Schema::create('user_petugas', function (Blueprint $table) {
            $table->id('id_user_petugas');
            $table->string('username')->unique();
            $table->string('password');
            $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_petugas');
    }
};