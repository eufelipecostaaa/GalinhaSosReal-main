@extends('template.main', ['menu' => "Projeto Multidisciplinar: ", "submenu" => "Principal"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')

<div class="row mb-5">
    <div class="banner mb-5">
        <img src="{{asset('img/bannerOvo1.webp')}}" class="img-fluid" width="100%" height="600px">
    </div>
    <div class="col">
        <div class="card text-center border card-bg-success">
            <div class="card-header text-white" style="background-color: #CD853F;">
              Atividades
            </div>
            <div class="card-body">
                <a href="{{route('site.atividade')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#CD853F" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center border card-bg-success">
            <div class="card-header text-white" style="background-color: #CD853F;">
              Integrantes
            </div>
            <div class="card-body">
                <a href="{{route('site.integrante')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#CD853F" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center border card-bg-success">
            <div class="card-header text-white" style="background-color: #CD853F;">
              Materiais
            </div>
            <div class="card-body">
                <a href="{{route('site.material')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#CD853F" class="bi bi-box-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="img-galinha">
                    <img src="{{ asset('img/fotoGalinha.avif') }}" class="img-fluid" alt="Galinha" />
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-galinha">
                    <h2>Galinhas</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis ut libero hendrerit feugiat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis ut libero hendrerit feugiat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis ut libero hendrerit feugiat.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection