<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Cliente extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $table = 'clientes';
    public $timestamps = true;
}
