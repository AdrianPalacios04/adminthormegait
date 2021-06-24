<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoReclamo extends Model
{
    use HasFactory;

    protected $connection = 'mysql_connect_4';
    protected $table = "tipo_reclamo";
    protected $primaryKey = 'id_tipo';
    public $timestamps = false;

    protected $fillable = [
        'tipo'
    ];

    public function Reclamo()
    {
        return $this->hasMany(Reclamo::class);
    }
}