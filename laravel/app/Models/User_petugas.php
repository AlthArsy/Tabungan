<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_petugas extends Model
{
    protected $fillable = [
        'username',
        'password',
    ];
}