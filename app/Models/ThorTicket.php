<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThorTicket extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_3';
    protected $table = "tc_thorticket";
    protected $primaryKey = 'i_id';
    public $timestamps = false;
    protected $fillable = [
        "t_nombre","t_pregunta","t_respuesta","t_pregunta2","t_respuesta2",
        "t_pregunta3","t_respuesta3","t_llave1","t_llave2","t_llave3","pistas_Ax","user_id","old_id","i_uso"
    ];
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Carrera()
    {
        return $this->hasMany(Carrera::class);
    }

    // Relación de uno a muchos con diferentes columnas que no son ID
    public function Carrerat()
    {
        return $this->hasMany(CarreraTotal::class,"old_id");
    }
}