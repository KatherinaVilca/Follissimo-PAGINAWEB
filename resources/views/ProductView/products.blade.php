<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Color</th>
            <th>Categoria</th>
            <th>Tamaño</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $productos)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->color }}</td>
            <td>{{ $producto->tipo_categoria}}</td>
            <td>{{ $producto->tipo_tamaño}}</td>
            <td>{{ $producto->descripcion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
