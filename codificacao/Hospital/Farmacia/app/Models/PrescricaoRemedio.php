<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescricaoRemedio extends Model
{
    protected $table = 'prescricao_remedios';
    protected $fillable = ['id_prescricao','id_remedio'];
}
