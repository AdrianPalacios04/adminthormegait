<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCategoria extends Model
{
    use HasFactory;

    protected $connection = 'mysql_connect_4';
    protected $table = "categoria";
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    protected $fillable = [
        'categoria'
    ];

    public function Reclamo()
    {
        return $this->belongsTo(Reclamo::class,'id_categoria');
    }
}