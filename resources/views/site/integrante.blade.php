@extends('template.main', ['menu' => "home", "submenu" => "Integrantes"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')

<div class="row mb-3">
    <div class="col">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-6 mb-auto">
                    <div class="card">
                        <img src="{{ asset("storage/$item->foto") }}" class="card-img-top" alt="{{ $item->nome }}">
                        <div class="card-body">
                            <h5 class="card-title text-success fs-5">{{ $item->nome }}</h5>
                            <p class="card-text text-success fs-6">{{ $item->biografia }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
