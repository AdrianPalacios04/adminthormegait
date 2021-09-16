<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarrera extends Model
{
    use HasFactory;      
    protected $connection = 'mysql_connect_4';
    protected $table = "usuario_carreras";
    protected $fillable = [
        'idUsuario','idCarrera','resultado_hora','puesto'
    ];

    public function Usuario()
    {
        return $this->belongsTo(Client::class,'idUsuario');
    }
    public function Carrerat()
    {
        return $this->belongsTo(CarreraTotal::class,'id_ax');
    }
}