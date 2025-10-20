<?php

namespace App\Http\Controllers;

use App\Models\Enfermeiro;
use Illuminate\Http\Request;

class EnfermeiroController extends Controller
{
    public function index()
    {
        $enfermeiros = Enfermeiro::all();
        return view('enfermeiros.index', compact('enfermeiros'));
    }

    public function create()
    {
        return view('enfermeiros.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'coren' => 'required|string|max:50|unique:enfermeiros',
            'email' => 'required|email|unique:enfermeiros',
            'telefone' => 'nullable|string|max:20',
        ]);

        Enfermeiro::create($validated);
        return redirect()->route('enfermeiros.index')->with('success', 'Enfermeiro cadastrado com sucesso!');
    }

    public function edit(Enfermeiro $enfermeiro)
    {
        return view('enfermeiros.create', compact('enfermeiro'));
    }

    public function update(Request $request, Enfermeiro $enfermeiro)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'coren' => 'required|string|max:50|unique:enfermeiros,coren,' . $enfermeiro->id,
            'email' => 'required|email|unique:enfermeiros,email,' . $enfermeiro->id,
            'telefone' => 'nullable|string|max:20',
        ]);

        $enfermeiro->update($validated);
        return redirect()->route('enfermeiros.index')->with('success', 'Enfermeiro atualizado com sucesso!');
    }

    public function destroy(Enfermeiro $enfermeiro)
    {
        $enfermeiro->delete();
        return redirect()->route('enfermeiros.index')->with('success', 'Enfermeiro excluído!');
    }
}
