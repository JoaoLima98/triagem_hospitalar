<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class MedicoLoginController extends Controller
{
    public function store(Request $request){

        $response = Http::withHeaders(['Accept' => 'application/json'])
        ->post('http://127.0.0.1:8000/api/medico-login', [
            'email' => $request->email,
            'crm' => $request->crm
        ]);
        $data = $response->json();
        if (!empty($data['id'])) {
            $user = User::firstOrCreate(
                ['email' => $data['email']], // busca pelo email
                ['name' => $data['nome'], 'password' => bcrypt(str()->random(16))]
            );

            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }
}
