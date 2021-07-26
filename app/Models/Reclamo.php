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
       'telefono_casa','contestar','email','domicilio','tienda_compra','id_tipo',
       'monto_reclamo','id_categoria','pedido','detalle','id_usuario','fecha_registro'
    ];
    public function Clients()
    {
        return $this->belongsTo(Client::class,'id_usuario');
    }

    // public function Tipo()
    // {
    //     return $this->belongsTo(TipoReclamo::class,'id_tipo');
    // }
    // public function Categoria()
    // {
    //     return $this->belongsTo(TipoCategoria::class,'id_categoria');
    // }
}