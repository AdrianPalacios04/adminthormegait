<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioDia extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_4';
    protected $table = "usuario_carreras";
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'idUsuario','idUsuario','puesto'
    ];
}