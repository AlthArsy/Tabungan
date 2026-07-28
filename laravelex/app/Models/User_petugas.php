<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User_petugas extends Authenticatable
{
    protected $table = 'user_petugas';   
    protected $primaryKey = 'id_user_petugas'; 

    protected $fillable = [
        'username',
        'password',
        'id_petugas',
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id_petugas');
    }

}