@extends('templates.template')

@section('content')

<h1 class="text-center mt-4 mb-4">Crud Livros</h1>
<hr>

<br>
<h1 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif Livro</h1>

<div class="col-8 m-auto">

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ocorreu um erro!</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(isset($book))
    <form action="{{ url('books/' . $book->id) }}" method="post" name="formEdit" id="formEdit" class="p-4 border shadow rounded">
    @method('PUT')
@else 
    <form action="{{ url('books') }}" method="post" name="formCard" id="formCard" class="p-4 border shadow rounded">
@endif

    @csrf
    <div class="form-group mb-3">
        <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ $book->title ?? '' }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="pages">Páginas:</label>
        <input type="number" class="form-control" id="pages" name="pages" placeholder="Páginas" value="{{ $book->pages ?? '' }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="price">Preço:</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Preço" value="{{ $book->price ?? '' }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="id_user">Usuário:</label>
        <select class="form-control" name="id_user" id="id_user">
            <option value="{{ $book->relUsers->id ?? '' }}">{{ $book->relUsers->name ?? 'Selecionar' }}</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">@if(isset($book)) Atualizar @else Cadastrar @endif</button>
        <a href="{{ route('book') }}" class="btn btn-secondary">Voltar</a>
    </div>
</form>

</div>

@endsection
