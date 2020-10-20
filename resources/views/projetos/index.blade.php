@extends('layouts.interna')

@section('titulo', 'Projetos')

@section('content')

        


        <div class="col col-md-8 centro">
            <div class="card">

              @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              
              @if(session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Você está logado! -->

                    <div class="header-list">
                        <h1 class="mb-0 titulo" >PROJETOS</h1>
                        <hr>
                        {{-- <p class="gray">Que você está participando</p> --}}
                    </div>

                    @forelse ( $projetos as $projeto )
                    
                      <div class="card mb-3" id="page-projetos">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="{{asset('img/logo-giraffas.png')}}" class="card-img" alt="...">
                              
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title cliente"><a href="/projetos/editar/{{$projeto->id }}">{{ $projeto->cliente }}</a></h5>
                                <p><span class="badge badge-primary badge-pill">{{ $projeto->projeto }}</span> 14 atividades pendentes</p>
                                <p class="card-text briefing">{{ $projeto->briefing }}</p>
                                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  <a href="/projetos/editar/{{$projeto->id }}" class="card-link">Visualizar</a>
                                  <a href="/projetos/apagar/{{ $projeto->id }}" class="card-link">Apagar</a> --}}
                              </div>
                              
                            </div>

                           
                            
                          </div>

                          <div class="row">

                            <div class="col-md-6">
                              <p class="responsaveis ">Responsáveis: </p>  
                            </div>

                            <div class="col-md-6 ">
                              <div class="actions text-right">
                                <a href="/projetos/editar/{{$projeto->id }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>  
                                <a href=""><i class="fa fa-comments" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                              </div>
                            </div>

                          </div>


                        </div>

                      @empty
                        <p>Nenhuma Categoria Cadastrada</p>
                      @endforelse


                </div>
            </div>
        </div>


@endsection
