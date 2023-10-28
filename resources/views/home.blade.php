@extends('layouts.app')

@section('content')


    
</div>
<div class="container mt-5">

    <!-- filtro de pesquisa -->
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
            <button type="submit" class="btn btn-primary">
                Pesquisar
            </button>  
        </div>
       
    </form> 
    <div class="row mt-3" id="listaFilmes">
        <!-- Card do Filme 1 -->

        @foreach($filmes as $k => $item)
        
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{$item->capa}}" class="card-img-top" alt="filme">
                <div class="card-body">
                    <h5 class="card-title">{{$item->titulo}}</h5>
                    <p class="card-text">{{$item->resumo}}.</p>
                    <p class="card-text"><strong>Gênero: </strong>{{$item->generoFilme->tipo}}</p>
                    <p class="card-text"><strong>Status: </strong>
                    
                    {{$item->status}}
                
                </p>
                </div>
                @auth

                    @if($item->status == 'disponivel')            
                    <form action="{{route('locarfilme',[$item->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="id_filme" value="{{$item->id}}">
                        <button type="submit">Alugar</button>
                    </form>
                    
                    @else
                    @if($item->locar
                        ->where('id_user', Auth::user()->id)
                        ->whereNull('data_entrega')
                        ->count() > 0)

                    <form action="" method="">
                        @csrf
                        <input type="hidden" name="id" value="{{}}">
                        <button type="submit">Devolver</button>

                    </form>
                    @endif

                    @endif
                @endauth
                
            </div>
        </div>
        @endforeach
        
        
    </div>
</div>

<!-- Inclua os scripts do Bootstrap e do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
@endsection
