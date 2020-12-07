@extends('index')

@section('content')
    <div class="container-fluid">
    <p class="h1 font-weight-light text-muted">Bem vindo!</p>
    <hr>
    <div class="row">
        <div class="col">
            <div class="important text-muted">
                <p class="h3 font-weight-light text-muted">Ultimos Pedidos</p>

                <table class="table table-pedidos border-0">
                    <thead class="border-0">
                    </thead>
                    <tbody>
                        @foreach ($sales as $sale)
                            <tr onclick="window.location.href='{{ route('sales.page') }}'">
                                <th>{{ $sale->id }}</th>
                                <td>R$ {{ $sale->amount }}</td>
                                <td>
                                    Rua {{ $sale->Address()->first()->street }},
                                    Nº {{ $sale->Address()->first()->number }},
                                    Bairro {{ $sale->Address()->first()->neighborhood }},
                                    UF {{ $sale->Address()->first()->UF }},
                                    CEP {{ $sale->Address()->first()->CEP }}.
                                </td>
                                <td>{{ $sale->name }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
        </div>
        <div class="col">
            <div class="important_orange text-white display-4 font-weight-light">
                Renda Bruta <br> 
                <label class="p-3 font-weight-light display-2">R$ 0.000,00</label>
            </div>
        </div>
    </div>
    </div>
    <script>
        $('#home').addClass('active-menu');
    </script>
@endsection
