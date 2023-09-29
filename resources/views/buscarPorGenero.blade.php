@extends('layouts.app')

@section('content')


<form action="{{route('buscarPorGenero')}}" method="GET">
        <div class="row col-3">
            <h3>Filtrar por Gênero</h3>
            
            <select name="generos" id="filtroGenero">
            <!-- for each que traz todos os generos cadastrados -->
                @foreach($genero as $k => $item)
                    <option value="{{$item->id}}">{{$item->tipo}}</option>
                @endforeach
            <!-- Adicione mais opções de gênero aqui -->
            </select>   
            <hr>
            <button type="submit" class="btn btn-primary">
                Pesquisar
            </button>  
        </div>
       
</form> 

<div class="row">
@foreach($filmes as $k => $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{$item->capa}}" class="card-img-top" alt="Filme 1">
                <div class="card-body">
                    <h5 class="card-title">{{$item->titulo}}</h5>
                    <p class="card-text">{{$item->resumo}}.</p>
                    <p class="card-text"><strong>Gênero:</strong>{{$item->generoFilme->tipo}}</p>
                    <p class="card-text"><strong>Status: </strong>{{$item->status}}</p>
                </div>
            </div>
        </div>
@endforeach

@endsection
</div>