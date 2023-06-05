<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria_keahlian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='kriteria_keahlians';
    protected $guarded =[];
}
