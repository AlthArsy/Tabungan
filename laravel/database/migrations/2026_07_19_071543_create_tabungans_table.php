<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tabungan', function (Blueprint $table)
        {
            $table->id('id_tabungan');
            $table->foreignId('id_siswa')->constrained('siswa', 'id_siswa')->onDelete('cascade');
            $table->integer('jumlah_tabungan');
            $table->enum('jenis', ['setor', 'tarik']);
            $table->decimal('jumlah', 12, 2);
            $table->date('tanggal');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('tabungan');
    }
};
