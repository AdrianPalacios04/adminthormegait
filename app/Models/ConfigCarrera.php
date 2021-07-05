<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigCarrera extends Model
{
    use HasFactory;
    protected $table = "config_event_carreras";
    protected $primaryKey = 'id';
    protected $fillable = [
        'cant_ax_cash','cant_ax_ticket','inicio','intervalo','duration'
    ];
}