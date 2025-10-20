<?php

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    // login medico
    Route::post('/medico-login', function(Request $request){
        $medico = Medico::where('crm',$request->crm)
                        ->where('email',$request->email)
                        ->first();

        if($medico) {
            return response()->json([
                'id' => $medico->id,
                'nome' => $medico->nome,
                'email' => $medico->email
            ]);
        }

        return response()->json(['error' => 'Não encontrado'], 404);
    });
});
