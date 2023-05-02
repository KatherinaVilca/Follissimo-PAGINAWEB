<!DOCTYPE html>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>