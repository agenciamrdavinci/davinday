@extends('layouts.interna')

@section('titulo', 'Relatório')

@section('content')

    <div class="col col-md-8 centro">
        <div class="card">
            <!-- <div class="card-header">Dashboard</div> -->

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Você está logado! -->

                <div class="header-list">
                    <h1 class="mb-0">ÚLTIMOS DOCUMENTOS ATRIBUÍDOS</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="">Job 2.1 - Layout</a>
                        <p>1 dia atras</p>   
                    </li>
                    <li class="list-group-item">
                        <a href="">Job 2.1 - Layout</a>
                        <p>1 dia atras</p>   
                    </li>
                    <li class="list-group-item">
                        <a href="">Job 2.1 - Layout</a>
                        <p>1 dia atras</p>   
                    </li>
                    <li class="list-group-item">
                        <a href="">Job 2.1 - Layout</a>
                        <p>1 dia atras</p>   
                    </li>
                    <li class="list-group-item">
                        <a href="">Job 2.1 - Layout</a>
                        <p>1 dia atras</p>   
                    </li>
                    
                </ul>

                
            </div>
        </div>
    </div>

@endsection
