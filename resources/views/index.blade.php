@extends('templates.template')

@section('content')

<h1 class="text-center mt-4 mb-4">Crud Livros</h1>
<hr>

<div class="container">
    <div class="d-flex justify-content-end mt-4 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
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
                    <a href="{{ url("books/$books->id/edit") }}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <form action="{{ route('books.destroy', $books->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-delete">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script>
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const form = this.closest('form');
            Swal.fire({
                title: 'Tem certeza?',
                text: "Você não poderá reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

@endsection