<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $connection = 'mysql_connect_5';
    protected $table = "config_rices_day";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        // 'name','day','time_start','time_final','premio','cantidad'
        // 'name','start','end'
        'inicio','final','id_ax','id_px','px_1','px_2','race_state'
    ];
    use HasFactory;
}