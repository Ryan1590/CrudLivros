<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest; // informando o arquivo de validação que esta sendo ultilizado no metodo store e update
use App\Models\ModelBook;
use App\Models\User;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = $this->objBook->all()->sortBy('title');
        return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=$this->objUser->All(); //retornando tudo da tabela de user
        return view('create', compact('users')); //retornando a view create mandando para view os usuarios
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
      $cad = $this->objBook->create([
        'title' => $request->input('title'),
        'pages' =>$request->input('pages'),
        'price' =>$request->input('price'),
        'id_user' =>$request->input('id_user')
       ]);
       if($cad){
            
        return redirect()->route('book')->with('success', 'Livro cadastrado com sucesso!');

        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = $this->objBook->find($id);
        if ($book) {
            return view('show', compact('book'));
        } else {
            return redirect('/book')->with('error', 'Book não definido aaa');
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id) // mudado aqui tbm para BookRequest
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = $this->objBook->find($id);

        if ($book) {
            $book->delete();  // Exclua o livro
            return redirect()->route('book')->with('success', 'Livro excluído com sucesso!');
        } else {
            return redirect()->route('book')->with('error', 'Livro não encontrado.');
        }
    }
}
