<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    use SoftDeletes;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


    public function tamaño()
    {
        return $this->belongsTo(Tamaño::class,'tipo_tamaño');
    }
}
