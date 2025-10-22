<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nome', 'cpf', 'rg', 'telefone'];

    public function prescricoes()
    {
        return $this->hasMany(Prescricao::class, 'id_paciente');
    }
}
