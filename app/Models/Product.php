<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   /* protected $fillable = [
        'nombre',
        'precio',
        'color',
        'tipo_categoria',
        'tipo_tamaño',
        'descripcion',
    ];*/
    protected $table = 'productos';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


    public function tamaño()
    {
        return $this->belongsTo(Tamaño::class);
    }
}
