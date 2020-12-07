@extends('index')
@section('content')
    <div class="container-fluid">
        <table class="table table-pedidos">
            <thead class="border-bottom">
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>R${{ $product->price }}</td>
                        <td>{{ $product->reference }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script>
        $('#storage').addClass('active-menu');

    </script>
@endsection
