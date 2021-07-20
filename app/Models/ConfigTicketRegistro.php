<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigTicketRegistro extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_4';
    protected $table = "tc_ticketsinicio";
    protected $primaryKey = 'i_idticketinicio';
    public $timestamps = false;
    protected $fillable = [
        'd_dateinicio','d_datefinal','i_cantidad'
    ];
}