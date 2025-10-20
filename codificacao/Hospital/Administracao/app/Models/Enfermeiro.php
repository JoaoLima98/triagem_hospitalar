<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enfermeiro extends Model
{
    protected $table = 'enfermeiros';

    protected $fillable = [
        'nome',
        'coren',
        'email',
        'telefone',
    ];
}
