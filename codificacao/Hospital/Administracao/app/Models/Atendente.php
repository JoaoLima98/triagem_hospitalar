<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    protected $table = 'atendentes';

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'ra',
    ];
}
