@extends('template.template')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Enfermeiros</h2>
    <a href="{{ route('enfermeiros.create') }}" class="btn btn-success mb-3">Novo Enfermeiro</a>



    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>COREN</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enfermeiros as $enfermeiro)
                <tr>
                    <td>{{ $enfermeiro->id }}</td>
                    <td>{{ $enfermeiro->nome }}</td>
                    <td>{{ $enfermeiro->coren }}</td>
                    <td>{{ $enfermeiro->email }}</td>
                    <td>{{ $enfermeiro->telefone }}</td>
                    <td>
                        <a href="{{ route('enfermeiros.edit', $enfermeiro) }}" class="btn btn-primary btn-sm">Editar</a>
                        
                        <form id="delete-form-{{ $enfermeiro->id }}" action="{{ route('enfermeiros.destroy', $enfermeiro) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $enfermeiro->id }}" data-name="{{ $enfermeiro->nome }}">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const enfermeiroId = this.dataset.id;
            const enfermeiroName = this.dataset.name;

            Swal.fire({
                title: 'Você tem certeza?',
                text: `Deseja realmente excluir o enfermeiro "${enfermeiroName}"? Essa ação não pode ser desfeita!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${enfermeiroId}`).submit();
                }
            });
        });
    });
});
</script>
