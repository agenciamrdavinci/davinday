@extends('layouts.interna')

@section('titulo', 'Equipe')

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
                    <h1 class="mb-0">QUADRO DE EQUIPE</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                @forelse ( $equipes as $equipe )

                    
                    <div class="col-md-4 float-left">
                      <h5 class="card-title">{{ $equipe->name }} {{ $equipe->sobrenome }}</h5>
                      <p class="card-text">{{ $equipe->empresa }}</p>
                      <p class="card-text">{{ $equipe->cargo }}</p>
                      <p class="card-text">{{ $equipe->email }}</p>
                      <p class="card-text">{{ $equipe->celular }}</p>
                    </div>
                    
                      

                @empty
                  <p>Nenhuma Equipe Cadastrada</p>
                @endforelse

                
            </div>
        </div>
    </div>
       
@endsection
