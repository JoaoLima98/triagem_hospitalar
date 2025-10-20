<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse{
        $response = Http::post('http://localhost:8000/medico-login', [
            'email' => $request->email,
            'crm' => $request->crm
        ]);


        if ($response->ok() && !empty($response['id'])) {
            session([
                'user_id' => $response['id'],
                'nome' => $response['nome'],
                'role' => 'medico',
            ]);

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
