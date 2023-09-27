@extends('layouts.app')

@section('content')


    
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h3>Filtrar por Gênero</h3>
            <select class="form-select" id="filtroGenero">
                <!-- for each que traz todos os generos cadastrados -->
                 @foreach($genero as $k => $item)
                    <option value="{{$item->id}}">{{$item->tipo}}</option>
                @endforeach
                
                <!-- Adicione mais opções de gênero aqui -->
            </select>
        </div>
    </div>
    <div class="row mt-3" id="listaFilmes">
        <!-- Card do Filme 1 -->

        @foreach($filmes as $k => $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{$item->capa}}" class="card-img-top" alt="Filme 1">
                <div class="card-body">
                    <h5 class="card-title">{{$item->titulo}}</h5>
                    <p class="card-text">{{$item->resumo}}.</p>
                    <p class="card-text"><strong>Gênero:</strong>{{$item->generoFilme->tipo}}</p>
                </div>
            </div>
        </div>
        @endforeach
        
        <!-- Adicione mais cards de filmes aqui -->
    </div>
</div>

<!-- Inclua os scripts do Bootstrap e do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>@endsection
