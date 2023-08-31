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
            <form>
                <div class="mb-3">
                    <label for="capa" class="form-label">Capa do Filme (URL):</label>
                    <input type="url" class="form-control" id="capa" placeholder="URL da capa do filme">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Título do filme">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero:</label>
                    <select name="" id="" class="form-select">
                        <option value="">Selecione</option>
                        <option value="1">Ação</option>
                    </select>
                   
                </div>
                <div class="mb-3">
                    <label for="resumo" class="form-label">Resumo:</label>
                    <textarea class="form-control" id="resumo" rows="3" placeholder="Resumo do filme"></textarea>
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
                    <tr>
                        <td><img src="http://lorempixel.com.br/80/100" alt="Filme 1"></td>
                        <td>Filme 1</td>
                        <td>Ação</td>
                        <td>Um filme de ação emocionante.</td>
                        <td><a href="" class="btn btn-primary">Editar</a></td>
                    </tr>
                    <tr>
                        <td><img src="http://lorempixel.com.br/80/100" alt="Filme 2"></td>
                        <td>Filme 2</td>
                        <td>Comédia</td>
                        <td>Uma comédia hilária que vai te fazer rir.</td>
                        <td><a href="" class="btn btn-primary">Editar</a></td>
                    </tr>
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
