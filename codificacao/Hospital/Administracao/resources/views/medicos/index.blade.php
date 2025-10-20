@extends('template.template')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Médicos</h2>
    <a href="{{ route('medicos.create') }}" class="btn btn-success mb-3">Novo Médico</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>Email</th>
                    <th>Especialidade</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicos as $medico)
                <tr>
                    <td>{{ $medico->id }}</td>
                    <td>{{ $medico->nome }}</td>
                    <td>{{ $medico->crm }}</td>
                    <td>{{ $medico->email }}</td>
                    <td>{{ $medico->especialidade }}</td>
                    <td>{{ $medico->telefone }}</td>
                    <td>
                        <a href="{{ route('medicos.edit', $medico) }}" class="btn btn-primary btn-sm">Editar</a>
                        
                        <form id="delete-form-{{ $medico->id }}" action="{{ route('medicos.destroy', $medico) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $medico->id }}" data-name="{{ $medico->nome }}">
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
        button.addEventListener('click', function (event) {
            const medicoId = this.dataset.id;
            const medicoName = this.dataset.name;

            Swal.fire({
                title: 'Você tem certeza?',
                text: `Deseja realmente excluir o médico "${medicoName}"? Essa ação não pode ser desfeita!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${medicoId}`).submit();
                }
            });
        });
    });
});
</script>
