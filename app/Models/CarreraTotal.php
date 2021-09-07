<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraTotal extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_5';
    protected $table = "config_races";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'inicio','final','id_ax','id_px','px_1','px_2','race_state'
    ];
    public function Status()
    {
        return $this->belongsTo(EstadoPremio::class,'race_state');
    }

    public function Premio()
    {
        return $this->belongsTo(TipoPremio::class,'id_px');
    }
    public function Ticket()
    {
        return $this->belongsTo(ThorTicket::class,'id_ax');
    }
    public function Winner()
    {
        return $this->hasMany(UserCarrera::class,'id');
    }
}