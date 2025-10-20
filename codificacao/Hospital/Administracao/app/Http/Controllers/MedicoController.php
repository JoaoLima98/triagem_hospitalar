<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'required|string|max:50|unique:medicos',
            'email' => 'required|email|unique:medicos',
            'especialidade' => 'required|string|max:100',
            'telefone' => 'nullable|string|max:20',
        ]);

        Medico::create($validated);
        return redirect()->route('medicos.index')->with('success', 'Médico cadastrado com sucesso!');
    }

    public function edit(Medico $medico)
    {
        return view('medicos.create', compact('medico'));
    }

    public function update(Request $request, Medico $medico)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'required|string|max:50|unique:medicos,crm,' . $medico->id,
            'email' => 'required|email|unique:medicos,email,' . $medico->id,
            'especialidade' => 'required|string|max:100',
            'telefone' => 'nullable|string|max:20',
        ]);

        $medico->update($validated);
        return redirect()->route('medicos.index')->with('success', 'Médico atualizado com sucesso!');
    }

    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medicos.index')->with('success', 'Médico excluído!');
    }
}
