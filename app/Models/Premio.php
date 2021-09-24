<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class Premio extends Model
{
    use HasFactory;
    protected $connection = 'mysql_connect_5';
    protected $table = "solitud_premios";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario','monto','banking_entity','account_type','account_soles','interbank_number','status'
    ];

    public function decryptAccount()
    {
        return decrypt($this->attributes['account_soles'],);
    }
    public function decryptCii()
    {
        return decrypt($this->attributes['interbank_number'],);
    }
}