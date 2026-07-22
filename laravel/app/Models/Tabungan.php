<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $fillable = [
        'id_siswa',
        'jumlah_tabungan',
        'jenis',
        'jumlah',
        'tanggal',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}