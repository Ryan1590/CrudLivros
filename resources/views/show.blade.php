@extends('templates.template')

@section('content')

<h1 class="text-center mt-4 mb-4">Crud Laravel</h1>
<hr>

@php 

$user=$book->find($book->id)->relUsers;

@endphp


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Detalhes do Livro</h2>
                </div>
                <div class="card-body">
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Título:</strong></h5>
                            <p>{{ $book->title }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Páginas:</strong></h5>
                            <p>{{ $book->pages }}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5><strong>Preço:</strong></h5>
                            <p>{{ $book->price }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Autor:</strong></h5>
                            <p>{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5><strong>email:</strong></h5>
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ url('/book') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
