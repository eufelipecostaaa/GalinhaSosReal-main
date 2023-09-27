@extends('template.main', ['menu' => "home", "submenu" => "Atividades"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')

<div class="row mb-3">
    <div class="col">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-auto mb-3">
                    <div class="card">
                        <img src="{{ asset("storage/$item->foto") }}" class="card-img-top" alt="{{ $item->nome }}">
                        <div class="card-body">
                            <h5 class="card-title text-success fs-5">{{ $item->nome }}</h5>
                            <p class="card-text text-success fs-6">{{ $item->descricao }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
