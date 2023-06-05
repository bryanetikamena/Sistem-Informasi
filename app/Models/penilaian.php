<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='penilaians';
    protected $guarded =[];

   /* function kriteria_tanggung_jawab()
    {
        return $this-> belongsTo('App\kriteria_tanggung_jawab');
    }*/
}
