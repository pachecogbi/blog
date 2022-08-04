<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;

    protected $table = 'book'; // setando que o nome da tabela eh book
    protected $id = 'id';
    protected $fillable = [
        'title',
        'id_user',
        'pages',
        'price'
    ];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
