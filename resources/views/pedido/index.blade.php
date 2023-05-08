@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Pedidos
    </h2>
@endsection

@section('page content')
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Monto Total</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->monto_total }}</td>
                <td>{{ $pedido->fecha }}</td>
                <td>{{ $pedido->id_cliente }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
