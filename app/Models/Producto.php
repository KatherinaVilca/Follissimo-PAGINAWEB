<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamps = true;
    use SoftDeletes;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'tipo_categoria');
    }


    public function tamaño()
    {
        return $this->belongsTo(Tamaño::class,'tipo_tamaño');
    }

    public function scopeFiltro(Builder $query, Request $request)
    {
        if ($request->has('color')) {
            $query->where('color', $request->input('color'));
    }

        if ($request->has('tipo_tamaño')) {
            $query->where('color', $request->input('color'));
        }

        if ($request->has('precio_min')) {
            $query->where('precio', '>=', $request->input('precio_min'));
        }

        if ($request->has('precio_max')) {
            $query->where('precio', '<=', $request->input('precio_max'));
        }

        return $query;
    }
}
