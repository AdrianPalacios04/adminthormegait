<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = [
        'name','day','time_start','time_final','premio','cantidad'
    ];
    use HasFactory;
}