@extends('layouts.app')

@section('header')
    <h2>Header Create Producto</h2>
@endsection

@section('page content')
        <form action="/productos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre producto</label>
                <input type="text" class="form-control" name="Nombre" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                <input type="number" class="form-control" name="Precio" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="Color" class="form-label">Color</label>
                <input type="text" class="form-control" name="Color" tabindex="3">
            </div>
            <div class="mb-3">
                <label> Categoria:</label>
                <select class="form-select" aria-label="Default select example" name="Categoria" tabindex="4">
                    @foreach ($categorias as $categoria)
                        <option>{{ $categoria->tipo }}</option>
                    @endforeach
            </select>
            </div>
            <div class="mb-3">
                <label> Tamaño:</label>
                <select class="form-select" aria-label="Default select example" name="Tamaño" tabindex="5">
                    @foreach ($tamaños as $tamaño)
                        <option>{{ $tamaño->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion" tabindex="6">
            </div>

            <button type="submit" class="btn btn-success" tabindex="7">Crear</button>
            <a href="/productos" class="btn btn-danger" tabindex="8">Cancelar</a>
        </form>
@endsection
