<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Filmes</title>
    <!-- Inclua os arquivos do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class= col-6>
            <a href="{{route('filme')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar filme</a>
        </div>
        <div class= col-6>
            <a href="{{route('genero')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cadastrar Genero</a>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h3>Filtrar por Gênero</h3>
            <select class="form-select" id="filtroGenero">
                <option value="todos">Todos</option>
                <option value="acao">Ação</option>
                <option value="aventura">Aventura</option>
                <option value="comedia">Comédia</option>
                <!-- Adicione mais opções de gênero aqui -->
            </select>
        </div>
    </div>
    <div class="row mt-3" id="listaFilmes">
        <!-- Card do Filme 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="http://lorempixel.com.br/280/330" class="card-img-top" alt="Filme 1">
                <div class="card-body">
                    <h5 class="card-title">Filme 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="card-text"><strong>Gênero:</strong> Ação</p>
                </div>
            </div>
        </div>

        <!-- Card do Filme 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="http://lorempixel.com.br/280/330" class="card-img-top" alt="Filme 2">
                <div class="card-body">
                    <h5 class="card-title">Filme 2</h5>
                    <p class="card-text">Pellentesque nec felis sit amet mi aliquam vestibulum at eget eros.</p>
                    <p class="card-text"><strong>Gênero:</strong> Comédia</p>
                </div>
            </div>
        </div>

        <!-- Adicione mais cards de filmes aqui -->
    </div>
</div>

<!-- Inclua os scripts do Bootstrap e do jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
