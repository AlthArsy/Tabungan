<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class rekening extends Model
{
    protected $table = 'rekening';
    protected $primaryKey = 'id_rekening';
    protected $fillable = [
        'id_siswa',
        'saldo',
        'tahun_daftar',
        'created_at',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }
}