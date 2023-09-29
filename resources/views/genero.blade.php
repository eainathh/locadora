@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class= col-6>
            
        </div>
<div class="container mt-5">
    <div class="row text-center d-inline-flex p-2">
        <div class="col-md-auto bg-secondary">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
        </div>
    </div>
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

                    <form action="{{route('destroyg', ['id'=>$item-> id])}}" method ="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn mt-2"><ion-icon name="trash-outline"></ion-icon> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg> 
                            </button>
                    </form>
                </li>
                
                <!-- Adicione mais itens de lista de gêneros aqui -->
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection


