@extends('Template.layout')

@section('title', 'Buscar Guia')

@section('nav')
<a href="#" class="nav-item"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
<a href="{{ route('consultar.estoque') }}" class="nav-item"><i class="fas fa-pills"></i> Remédios</a>
<a href="{{ route('painel.guias') }}" class="nav-item"><i class="fas fa-calendar-check"></i> Consultas</a>
<a href="#" class="nav-item"><i class="fas fa-bed"></i> Leitos</a>
<a href="#" class="nav-item"><i class="fas fa-chart-bar"></i> Relatórios</a>
<a href="#" class="nav-item"><i class="fas fa-cog"></i> Configurações</a>
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
