@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Unidades de Venda</div>

                <div class="panel-body">
                <table class="table table-hover">
                    
                    <tr>
                        <th>Cod</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Fracionado</th>
                        <th>Porção</th>
                        <th colspan="2">Ação</th>
                    </tr>
                    
                    @foreach ($listaUnidades as $unidadesVenda)
                    <tr>
                        <td>{{ $unidadesVenda->id }}</td>
                        <td>{{ $unidadesVenda->nome }}</td>
                        <td>{{ $unidadesVenda->descricao }}</td>
                        <td>{{ ($unidadesVenda->is_fracionado ? "Sim": "Não") }}</td>
                        <td>{{ ($unidadesVenda->is_porcao ? "Sim": "Não") }}</td> 
                        <td><a href="/editarUnidadeVenda/{{$unidadesVenda->id}}">Editar</a></td>
                        <td><a disabled href="">Remover</a></td>  
                    </tr>

                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection