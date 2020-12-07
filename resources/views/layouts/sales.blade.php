@extends('index')
@section('content')
    <div class="container-fluid">
        {{-- Filtros e Novos Pedidos --}}
        <div class="Actions-pedidos">
            <nav class="navbar">
                {{-- Lista de opções de filtros --}}
                <ul class="nav">
                    <li class="nav-item">
                        {{-- Filtrar por data do pedido --}}

                        <select class="filter-select form-control shadow-none" name="Ordenar" id="order">
                            <option value="Nenhum">Nenhum</option>
                            <option value="recentes">Mais Recentes</option>
                            <option value="antigos">Mais Antigos</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        {{-- Filtrar por um texto --}}
                        <input type="text" class="form-control search-filter shadow-none" placeholder="Palavra Chave">
                        
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        <button class="btn-novo-pedido rounded" data-toggle="modal" data-target="#Request-Modal">Novo
                            Pedido</button>
                    </li>
                </ul>
                
            </nav>
        </div>
        {{-- Tabela de Pedidos --}}
        <table class="table table-pedidos">
            <thead class="border-bottom">
                <tr>
                    <th>Referência</th>
                    <th>Valor Final</th>
                    <th>Endereço</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
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




    <script>
        $('#sales').addClass('active-menu');
    </script>

   
@endsection
 