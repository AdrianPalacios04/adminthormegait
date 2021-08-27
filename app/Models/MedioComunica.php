<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioComunica extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_5';
    protected $table = "tipo_medio_comunica";
    protected $primaryKey = "id";
    
    protected $fillable = [
        'medio_comunica','estado'
    ];

    public function Reclamo()
    {
        return $this->hasMany(Reclamo::class);
    }
}