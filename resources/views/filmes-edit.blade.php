<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
    <!-- Inclua os arquivos do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class= col-6>
            <a href="{{route('home')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Home</a>
        </div>
<div class="container mt-5">
    <div class="row">
        <!-- Formulário de Cadastro/Edição de Filmes -->
        <div class="col-md-4">
            <h3>Cadastrar/Editar Filme</h3>
            <form action="{{route('filme.update', ['id'=>$filme->id])}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="capa" class="form-label">Capa do Filme (URL):</label>
                    <input type="url" class="form-control" value="{{$filme->capa}}" name="capa" id="capa" placeholder="URL da capa do filme">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" value="{{$filme->titulo}}" name="titulo" id="titulo" placeholder="Título do filme">
                </div>
                <div class="mb-3"> 
                    <!-- PARA TRAZER O VALUE DA SELECAO -->
                    <label for="genero" class="form-label">Gênero:</label>
                    <select id="" name="id_genero" class="form-select">
                        <option value="">Selecione</option>
                        @foreach($genero as $k => $value) 
                        <option value="{{$value->id}}" @if($filme->id_genero == $value->id) selected @endif >{{$value->tipo}}</option>
                        @endforeach
                    </select>
                   
                </div>
                <div class="mb-3">
                    <label for="resumo" class="form-label">Resumo:</label>
                    <textarea class="form-control" id="resumo" name="resumo" rows="3" placeholder="Resumo do filme">{{$filme->resumo}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>  
        <!-- Lista de Filmes em Tabela -->
        <div class="col-md-8">
            <h3>Editando filmes</h3>
            <table class="table">
                <form action="{{route('filme.update', ['id'=>$filme->id])}}" method="post">
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
                            
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
    </div>
</div>

<!-- Inclua os scripts do Bootstrap e do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
