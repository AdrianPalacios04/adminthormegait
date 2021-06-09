<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_4';
    protected $table = "tc_usuario";
    protected $primaryKey = 'i_idusuario';
    public $timestamps = false;
    
    protected $fillable = [
       "t_password","t_username","t_correoper","n_celular"
    ];
   
    public function Persona()
    {
        return $this->belongsTo(Persona::class,"i_idpersona");
    }

    // public function Reclamos()
    // {
    //     return $this->belongsTo(Reclamo::class,'user_id');
    // }
}