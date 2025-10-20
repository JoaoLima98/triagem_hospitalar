<?php

namespace App\Http\Controllers;

use App\Models\Atendente;
use Illuminate\Http\Request;

class AtendenteController extends Controller
{
    public function index()
    {
        $atendentes = Atendente::all();
        return view('atendentes.index', compact('atendentes'));
    }

    public function create()
    {
        return view('atendentes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:atendentes',
            'ra' => 'required|string|unique:atendentes',
        ]);

        Atendente::create($validated);
        return redirect()->route('atendentes.index')->with('success', 'Atendente cadastrado com sucesso!');
    }

    public function edit(Atendente $atendente)
    {
        return view('atendentes.create', compact('atendente'));
    }

    public function update(Request $request, Atendente $atendente)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:atendentes,email,' . $atendente->id,
            'ra' => 'required|string|unique:atendentes,ra,' . $atendente->id,
        ]);

        $atendente->update($validated);
        return redirect()->route('atendentes.index')->with('success', 'Atendente atualizado com sucesso!');
    }

    public function destroy(Atendente $atendente)
    {
        $atendente->delete();
        return redirect()->route('atendentes.index')->with('success', 'Atendente excluído!');
    }
}
