<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    protected $table = 'pedidos';
    public $timestamps = true;
    use SoftDeletes;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
