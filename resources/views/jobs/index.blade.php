@extends('layouts.interna')

@section('titulo', 'Jobs')

@section('content')

    <div class="col col-md-8 centro jobs-index">
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
                    <h1 class="mb-0 title">ÚLTIMOS JOBS ATRIBUÍDOS</h1>
                    <a href="{{route('jobs.create')}}" class="float-right">Adicionar</a>


                    {{-- <p class="gray">Que você é responsável</p>     --}}
                </div>

                @forelse ( $jobs as $job )   
                
                @if ($job->envolvidos == Auth::user()->id)
                    
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="/jobs/editar/{{$job->id }}">{{$job->titulo}}</a>
                        <p>Prazo: {{$job->prazo}}</p>   
                        <p>Sub-tarefas: {{$job->subtarefas}}</p>   
                        <p>Responsável: {{$job->responsavel}}</p>   
                        <p>Envolvidos: {{$job->envolvidos}}</p>     
                        <p>Situação: {{$job->situacao}}</p>   

                        
                    </li>                   
                </ul>

                <a href="/jobs/editar/{{$job->id }}" class="card-link">Editar</a>
                <a href="/jobs/apagar/{{ $job->id }}" class="card-link">Apagar</a>

                @endif

                @empty
                    <p>Nenhuma Job Cadastrado</p>
                @endforelse

                
            </div>
        </div>
    </div>

@endsection
