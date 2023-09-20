@extends('layouts.app')

@section('content')
<body>
<div class="container mt-5">
    <div class="row">
<div class="container mt-5">
    <div class="row">
        <!-- Formulário de Cadastro/Edição de Filmes -->
        <div class="col-md-4">
            <h3>Cadastrar/Editar Filme</h3>
            <form action="{{route('store.filme')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="capa" class="form-label">Capa do Filme (URL):</label>
                    <input type="url" class="form-control" name="capa" id="capa" placeholder="URL da capa do filme">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do filme">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero:</label>
                    <select id="" name="id_genero" class="form-select">
                        <option value="">Selecione</option>
                        @foreach($genero as $k => $item)
                        <option value="{{$item->id}}">{{$item->tipo}}</option>
                        @endforeach
                    </select>
                   
                </div>
                <div class="mb-3">
                    <label for="resumo" class="form-label">Resumo:</label>
                    <textarea class="form-control" id="resumo" name="resumo" rows="3" placeholder="Resumo do filme"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <!-- Lista de Filmes em Tabela -->
        <div class="col-md-8">
            <h3>Lista de Filmes</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Capa</th>
                        <th scope="col">Título</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Resumo</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody id="listaFilmes">
                    <!-- LISTANDO TODOS OS FILMES  -->
                    @foreach($filmes as $k => $item)
                    <tr>
                        <td><img src="{{$item->capa}}" alt="Filme 1" style="width:100px"></td>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->generoFilme->tipo}}</td> <!-- ACESSANDO A FUNCAO GENERO FILME PARA USAR O RELACIONAMENTO -->
                        <td>{{$item->resumo}}</td>
                        <td><a href="{{route('filme.edit',['id'=>$item-> id])}}" class="btn btn-primary">Editar</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Inclua os scripts do Bootstrap e do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
@endsection