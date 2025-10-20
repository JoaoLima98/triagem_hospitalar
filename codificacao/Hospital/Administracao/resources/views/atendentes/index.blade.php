@extends('template.template')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Lista de Atendentes</h2>
    <a href="{{ route('atendentes.create') }}" class="btn btn-success mb-3">Nova Atendente</a>

 

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($atendentes as $atendente)
                <tr>
                    <td>{{ $atendente->id }}</td>
                    <td>{{ $atendente->nome }}</td>
                    <td>{{ $atendente->ra }}</td>
                    <td>{{ $atendente->email }}</td>
                    <td>{{ $atendente->telefone }}</td>
                    <td>
                        <a href="{{ route('atendentes.edit', $atendente) }}" class="btn btn-primary btn-sm">Editar</a>

                        <form id="delete-form-{{ $atendente->id }}" action="{{ route('atendentes.destroy', $atendente) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $atendente->id }}" data-name="{{ $atendente->nome }}">
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
            const id = this.dataset.id;
            const name = this.dataset.name;

            Swal.fire({
                title: 'Você tem certeza?',
                text: `Deseja realmente excluir "${name}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        });
    });
});
</script>
