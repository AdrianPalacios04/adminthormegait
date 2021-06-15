<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Code extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'codes','f_inicio','f_final','tipo_ticket','cantidad','origen','uso','activo'
    ];
}