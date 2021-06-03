<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Code extends Model
{
    // protected $dateFormat = 'U';
    use HasFactory;
    protected $fillable = [
        'codes','created_at'
    ];
}