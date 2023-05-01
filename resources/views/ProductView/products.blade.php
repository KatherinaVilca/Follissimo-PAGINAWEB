@extends('layouts.app')

@section('header')
<h2>Header Productos</h2>
@endsection

@section('page content')
<!DOCTYPE html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Color</th>
                <th>Categoria</th>
                <th>Tamaño</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allProductos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->color }}</td>
                <td>{{ $producto->tipo_categoria}}</td>
                <td>{{ $producto->tipo_tamaño}}</td>
                <td>{{ $producto->descripción }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>
@endsection
