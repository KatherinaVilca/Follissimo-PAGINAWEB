<table>
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categorias)
        <tr>
            <td>{{ $categorias->tipo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>