@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class= col-6>
            
        </div>
<div class="container mt-5">
    <div class="row">
        <!-- Formulário de Adição/Edição de Gêneros -->
        <div class="col-md-4">
            <h3>Adicionar/Editar Gênero</h3>
            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero:</label>
                    <input type="text" class="form-control" name="txtgenero" id="genero" placeholder="Digite o gênero">
                </div>
                
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        <!-- Lista de Gêneros -->
        <div class="col-md-8">
            <h3>Lista de Gêneros</h3>

            @foreach($lista as $k => $item)

            <ul class="list-group" id="listaGeneros">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$item->tipo}}
                    <a href="{{route('genero.edit',['id'=>$item-> id])}}" class="btn btn-primary edit-btn">Editar</a>
                </li>
                
                <!-- Adicione mais itens de lista de gêneros aqui -->
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection


