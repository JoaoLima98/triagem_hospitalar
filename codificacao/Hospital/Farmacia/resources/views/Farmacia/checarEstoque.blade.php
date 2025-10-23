@extends('Template.layout')

@section('title', 'Buscar Guia')

@section('nav')
<a href="{{ url('/medico') }}" class="nav-item"><i class="fas fa-tachometer-alt"></i>Fazer prescrição (médico)</a>
<a href="{{ route('consultar.estoque') }}" class="nav-item"><i class="fas fa-pills"></i> Estoque de remédios</a>
<a href="{{ route('painel.guias') }}" class="nav-item"><i class="fas fa-calendar-check"></i> Consultar Guia</a>
<a href="{{ route('farmacia') }}" class="nav-item"><i class="fas fa-pills"></i> Entregar Medicamentos</a>

@endsection

@section('content')
<div class="main-content">
    <div class="main-content">
        <div class="content-header">
            <h2 class="content-title"><i class="fas fa-boxes"></i> Checar Estoque</h2>
        </div>

        <div class="row">
            @foreach($estoques as $estoque)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $estoque->remedio->nome ?? 'Remédio não encontrado' }}</h5>
                            <p class="card-text">
                                <strong>Lote:</strong> {{ $estoque->lote }}<br>
                                <strong>Quantidade:</strong> {{ $estoque->quantidade }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>

@endsection
