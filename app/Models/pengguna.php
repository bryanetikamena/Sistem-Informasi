<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $table='users';
    public $timestamps = false;

    protected $fillable = [
       
        'id_admin',
        'email',
        'password',
        'username',
    ];
}
