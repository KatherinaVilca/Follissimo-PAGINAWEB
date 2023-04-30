@section('content') 
<div class="container">
    <h1> Cargar nuevo producto </h1>

    <form action="{{route('product.store')}}" method="POST">
    <div class="mb-3">
        <label for="nameProduct" class="form-label">Nombre producto</label>
        <input type="text" class="form-control" name="nameProduct">
    </div>
    <div class="mb-3">
        <label for="priceProduct" class="form-label">Precio</label>
        <input type="numer" class="form-control" name="priceProduct">
    </div>
    <div class="mb-4">
        <label for="colorProduct" class="form-label">Color</label>
        <input type="text" class="form-control" name="colorProduct">
    </div>

    <label> Categoria:</label>
        <select class="form-select" aria-label="Default select example" name="categoriaProduct">
        @foreach ($categorias as $categorias)
                    <option value="{{ $categoria->id}}">{{ $categoria->tipo }}</option>
                @endforeach
    </select>

    <label> Tamaño:</label>
        <select class="form-select" aria-label="Default select example" name="tamañoProduct">
        @foreach ($tamaños as $tamaños)
                    <option value="{{ $tamaño->id}}">{{ $tamaño->tipo }}</option>
                @endforeach
        </select>

    <div class="mb-4">
    <label for="descriptonProduct" class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descriptionProduct">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>                                                                                                                     