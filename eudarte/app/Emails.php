<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    //
    protected $fillable = [
        'nome', 'email', 'assunto', 'mensagem'
    ];
}
