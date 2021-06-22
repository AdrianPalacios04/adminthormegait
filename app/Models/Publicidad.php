<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    use HasFactory;
    protected $table = 'publicidad';
    public $timestamps = false;
    protected $fillable = [
        'nombre','imagen','link','f_inicio','f_final','posicion','opciones','id_marca'
    ];
  

    public function Marca()
    {
       return $this->belongsTo(Marca::class,'id_marca');
    }
    
}