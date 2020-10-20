@extends('layouts.interna')

@section('titulo', 'Home')

@section('content')


    <div class="col col-md-8 centro">

        <div class="card mb-3">
            {{-- <div class="card-header">Dashboard</div> --}}

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                

                <!-- Você está logado! -->

                <div class="header-list">
                    <h1 class="mb-0">JOBS/SUBTAREFAS</h1>
                    <p class="gray mb-4">Que você é responsável</p>
                </div>

                <ul class="list-group list-group-flush andamento">
                    <div class="col-md-3 text-center">
                        <p class="text-bold">HOJE</p>
                        <p class="restantes">1</p>
                    </div>

                    <div class="col-md-3 text-center">
                        <p class="text-bold">ATRASADOS</p>
                        <p class="restantes">3</p>
                    </div>

                    <div class="col-md-3 text-center">
                        <p class="text-bold">SEMANA</p>
                        <p class="restantes">8</p>
                    </div>

                    <div class="col-md-3 text-center">
                        <p class="text-bold">PRONTOS</p>
                        <p class="restantes">2</p>
                    </div>

                    
                    
                </ul>

                
            </div>
        </div>
        
      
        <div class="card">
            {{-- <div class="card-header">Dashboard</div> --}}

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Você está logado! -->

                <div class="header-list">
                    <h1 class="mb-0">ÚLTIMOS JOBS EDITADOS</h1>
                    <p class="gray mb-4">Que você é responsável</p>
                </div>

                <ul class="list-group list-group-flush">
                    @forelse ($jobs as $job)
                        <li class="list-group-item">
                        <a href="/jobs/editar/{{$job->id }}">{{$job->titulo}}</a>
                        <p><small class="text-muted">Editado há 3 min atrás</small></p>
                    </li>   
                    @empty
                        
                    @endforelse

                     
                </ul>

                
            </div>
        </div>
    </div>


@endsection
