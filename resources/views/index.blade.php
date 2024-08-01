@extends('templates.template')

@section('content')

<h1 class="text-center mt-4 mb-4">Crud Laravel</h1>
<hr>

<div class="text-center mt-4 mb-4">
    <a href="{{url('books/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="container">
    <table class="table table-striped table-bordered text-cente">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        

    @foreach($book as $books)
        @php
         $user= $books->find($books->id)->relUsers;
        @endphp
        <tr>
            <th scope="row">{{$books->id}}</th>
            <td>{{$books->title}}</td>
            <td>{{$user->name}}</td>
            <td>{{$books->price}}</td>
            <td>
                <a href="{{ url("books/$books->id") }}">
                    <button class="btn btn-dark">Visualizar</button>
                </a>
                <a href="">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <form action="{{ route('books.destroy', $books->id) }}" method="POST" style="display:inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
    @endforeach
 
    </tbody>
    </table>
</div>

@endsection