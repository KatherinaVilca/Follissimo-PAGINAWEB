<!DOCTYPE html>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamaños as $tamaño)
            <tr>
                <td>{{ $tamaño->tipo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>