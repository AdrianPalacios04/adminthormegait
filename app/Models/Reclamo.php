<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    protected $table = "reclamo";
    protected $fillable = [
        'tipo_tienda',
            'tipo',
            'monto',
            'categoria',
            'pedido',
            'detalle',
            'user_id'
    ];
    public function Games()
    {
        return $this->belongsTo(Client::class,'i_idusuario');
    }
}