@extends('templates.template')

@section('content')

<h1 class="text-center mt-4 mb-4">Crud Laravel</h1>
<hr>

<h1 class="text-center">Cadastrar</h1>

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

    <form action="{{url('books')}}" method="post" name="formCard" id="formCard">
        @csrf <!--serve para segurança do formulario sempre usar, se não da b.o-->
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título" required>
            <br>
            <label for="pages">Paginas:</label>
            <input type="number" class="form-control" id="pages" name="pages" placeholder="Paginas" required>
            <br>
            <label for="price">Preço:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Preço" required>
            <br>

            <select class="form-control" name="id_user" id="id_user">
                <option value="">Selecione</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>

</div>





@endsection