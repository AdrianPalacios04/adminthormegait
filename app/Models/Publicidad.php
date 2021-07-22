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
        'nombre','imagen','link','f_inicio','f_final','id_estado',
        'id_posicion','id_orientacion','id_pagina'
    ];
}