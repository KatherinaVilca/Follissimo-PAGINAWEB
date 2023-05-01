<table>
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tamaños as $tamaños)
        <tr>
            <td>{{ $tamaños->tipo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>