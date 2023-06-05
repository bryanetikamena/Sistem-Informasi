<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bobot_kriteria extends Model
{
    use HasFactory;

    protected $table='bobot_kriterias';
    public $timestamps = false;
    protected $guarded =[];
}
