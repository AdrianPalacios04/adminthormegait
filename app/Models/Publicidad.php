<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    protected $table = 'publicidad';
    public $timestamps = false;
    protected $fillable = [
        'imagen','nombre','zona','posicion','lugar','f_inicio','f_final'
    ];
    use HasFactory;
    
}