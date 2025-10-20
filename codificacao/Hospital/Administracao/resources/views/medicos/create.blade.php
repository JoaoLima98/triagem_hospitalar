@extends('template.template')

@section('content')

@php
    $isEdit = isset($medico) && $medico->id;
    $title = $isEdit ? "Editar Médico" : "Cadastrar Médico";
    $action = $isEdit ? route('medicos.update', $medico) : route('medicos.store');
    $buttonText = $isEdit ? "Atualizar" : "Salvar";
@endphp

<h2>{{ $title }}</h2>

<form action="{{ $action }}" method="POST" class="p-4 border rounded bg-light">
    @csrf

    @if($isEdit)
        @method('PUT')
    @endif
    
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" 
               value="{{ $medico->nome ?? old('nome') }}" required>
    </div>
    
    <div class="mb-3">
        <label for="crm" class="form-label">CRM</label>
        <input type="text" class="form-control" id="crm" name="crm" placeholder="123456/SP" 
               value="{{ $medico->crm ?? old('crm') }}" required maxlength="9">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" 
               value="{{ $medico->email ?? old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="especialidade" class="form-label">Especialidade</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Especialidade" 
               value="{{ $medico->especialidade ?? old('especialidade') }}" required>
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 99999-9999" 
               value="{{ $medico->telefone ?? old('telefone') }}" maxlength="15">
    </div>

    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const inputTelefone = document.getElementById('telefone');
    if (inputTelefone) {

        function formatarTelefone(value) {
            if (!value) return "";
            value = value.replace(/\D/g, '').substring(0, 11);
            if (value.length > 10) {
                return value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (value.length > 5) {
                return value.replace(/^(\d{2})(\d{4}).*/, '($1) $2-....'); 
            } else if (value.length > 2) {
                return value.replace(/^(\d{2}).*/, '($1) ');
            } else {
                return value.replace(/^(\d*)/, '($1');
            }
        }

        inputTelefone.addEventListener('input', function(e) {
            e.target.value = formatarTelefone(e.target.value);
        });

        inputTelefone.value = formatarTelefone(inputTelefone.value);
    }


    const inputCrm = document.getElementById('crm');
    if (inputCrm) {
        inputCrm.addEventListener('input', function(e) {
            let value = e.target.value.replace(/[^a-zA-Z0-9]/g, '').toUpperCase();
            let digits = value.replace(/[^0-9]/g, '').substring(0, 6);
            let letters = value.replace(/[^A-Z]/g, '').substring(0, 2);
            e.target.value = digits + (letters.length > 0 ? '/' + letters : '');
        });
    }
});
</script>
@endpush