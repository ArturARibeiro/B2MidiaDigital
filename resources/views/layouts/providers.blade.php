@extends('index')

@section('content')
<div class="container-fluid">
<table class="table table-pedidos">
    <thead class="border-bottom">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->name }}</td>
                <td>
                    Rua {{ $provider->Address()->first()->street }},
                    Nº {{ $provider->Address()->first()->number }},
                    Bairro {{ $provider->Address()->first()->neighborhood }},
                    UF {{ $provider->Address()->first()->UF }},
                    CEP {{ $provider->Address()->first()->CEP }}.
                </td>
                <td>{{ $provider->fone }}</td>
                <td>{{ $provider->emailAddress }}</td>
            </tr>
        @endforeach
        
    </tbody>
</table>    
</div>
<script>
    $('#provider').addClass('active-menu');
</script>
@endsection