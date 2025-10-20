<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    protected $fillable = ['nome',
                            'crm',
                            'email',
                            'especialidade',
                            'telefone'];
    
}
