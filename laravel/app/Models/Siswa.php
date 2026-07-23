<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {
    protected $fillable = [
        'nis',
        'nama',
        'jurusan',
    ];

    // public function siswa()
    // {
    //     return $this->tabungans()->where('jenis', 'setor')->sum('jumlah') 
    //          - $this->tabungans()->where('jenis', 'tarik')->sum('jumlah');
    // }
}