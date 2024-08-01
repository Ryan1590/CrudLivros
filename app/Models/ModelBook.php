<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table = 'books';
    protected $fillable=['title', 'pages', 'price', 'id_user']; //esse carinha aqui é segurança do laravel/ precisa ter para poder inserir 

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
