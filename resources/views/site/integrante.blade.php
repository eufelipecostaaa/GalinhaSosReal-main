@extends('template.main', ['menu' => "home", "submenu" => "Integrantes"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')

<div class="row mb-3">
    <div class="col">
        <div class="card-deck">
            @foreach ($data as $item)
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="rounded-circle overflow-hidden flex-shrink-0" style="width: 120px; height: 120px; margin-right: 20px;">
                            <img src="{{ asset("storage/$item->foto") }}" class="img-fluid" alt="{{ $item->nome }}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ml-4">
                            <h5 class="card-title text fs-5">{{ $item->nome }}</h5>
                            <p class="card-text text fs-6 text-break">{{ $item->biografia }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
