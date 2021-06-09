<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_4';
    protected $table = "reclamaciones";
    protected $primaryKey = 'id_reclamaciones';
    public $timestamps = false;

    protected $fillable = [
        'nombres','apellidos','celular','telefono_casa','dni','pais','fecha_nac','sexo','contestar','email',
        'domicilio','tienda_compra','id_tipo','monto_reclamo','id_categoria','pedido','detalle','id_usuario','fecha_registro'
    ];
    // protected $table = "reclamo";
    // protected $fillable = [
    //         'tipo_tienda',
    //         'tipo',
    //         'monto',
    //         'categoria',
    //         'pedido',
    //         'detalle',
    //         'user_id'
    // ];
    // public function Clients()
    // {
    //     return $this->hasOne(Client::class,'i_idusuario');
    // }
}