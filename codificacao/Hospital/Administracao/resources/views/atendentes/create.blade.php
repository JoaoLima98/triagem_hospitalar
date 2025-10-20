@extends('template.template')

@section('content')

@php
    $isEdit = isset($atendente) && $atendente->id;
    $title = $isEdit ? "Editar Atendente" : "Cadastrar Atendente";
    $action = $isEdit ? route('atendentes.update', $atendente) : route('atendentes.store');
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
               value="{{ $atendente->nome ?? old('nome') }}" required>
    </div>

    <div class="mb-3">
        <label for="ra" class="form-label">RA</label>
        <input type="text" class="form-control" id="ra" name="ra" placeholder="RA" 
               value="{{ $atendente->ra ?? old('ra') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" 
               value="{{ $atendente->email ?? old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 99999-9999" 
               value="{{ $atendente->telefone ?? old('telefone') }}" maxlength="15">
    </div>

    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('atendentes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const inputTelefone = document.getElementById('telefone');
    if (inputTelefone) {
        function formatarTelefone(value) {
            if (!value) return "";
            value = value.replace(/\D/g, '');
            if (value.length > 10) {
                return value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (value.length > 5) {
                return value.replace(/^(\d{2})(\d{4})(\d*)/, '($1) $2-$3');
            } else if (value.length > 2) {
                return value.replace(/^(\d{2})(\d*)/, '($1) $2');
            } else {
                return value.replace(/^(\d*)/, '($1');
            }
        }

        inputTelefone.addEventListener('input', function(e) {
            e.target.value = formatarTelefone(e.target.value);
        });

        inputTelefone.value = formatarTelefone(inputTelefone.value);
    }
});
</script>
