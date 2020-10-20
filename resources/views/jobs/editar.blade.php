<?php
use App\Projeto;
$projetos = DB::table('projetos')->get();

?>

@extends('layouts.interna')

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
                    <h1 class="mb-0">EDITAR JOB</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                <form action="/jobs/{{$job->id}}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="cliente">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$job->titulo}}">
                        </div>
    
                        <div class="form-group">
                            <label for="projeto">Projeto</label>
                            <select class="form-control" id="projeto" name="projeto_id">
                              @foreach ($projetos as $p)
                                <option>{{$p->id}}</option>
                              @endforeach  
                              
                            </select>
                          </div>
    
                          <div class="form-group">
                            <label for="cliente">Cliente</label>
                            <select class="form-control" id="cliente" name="cliente_id">
                                @foreach ($projetos as $p)
                                    <option>{{$p->id}}</option>
                                @endforeach                          
                            </select>
                          </div>
    
                        <div class="form-group">
                        <label for="cliente">Prazo</label>
                            <input type="text" class="form-control" id="prazo" name="prazo" value="{{$job->prazo}}">
                        </div>
    
                        <div class="form-group">
                        <label for="cliente">Concluído no Prazo</label>
                            <input type="text" class="form-control" id="concluido" name="concluido_prazo" value="{{$job->concluido_prazo}}">
                        </div>
    
                        <div class="form-group">
                        <label for="cliente">Subtarefas</label>
                            <input type="text" class="form-control" id="subtarefas" name="subtarefas" value="{{$job->subtarefas}}">
                        </div>
    
                        <div class="form-group">
                        <label for="cliente">Horas</label>
                            <input type="text" class="form-control" id="horas" name="horas" value="{{$job->horas}}">
                        </div>
    
                        <div class="form-group">
                        <label for="cliente">Responsável</label>
                            <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{$job->responsavel}}">
                        </div>
    
                        <div class="form-group">
                            <label for="envolvidos">Envolvidos</label>
                            <select multiple class="form-control" id="envolvidos" name="envolvidos">
                              <option>Adriana</option>
                              <option>Felipe</option>
                              <option selected>Lucas Augusto</option>
                              <option>Pedro</option>
                              <option>Mayara</option>
                              <option>Giovana 1</option>
                              <option>Lara</option>
                              <option>Nuno</option>
                              <option>Giovana 2</option>
                            </select>
                          </div>
    
                        <div class="form-group">
                        <label for="cliente">Status</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{$job->status}}">
                        </div>
    
                        <div class="form-group">
                        <label for="cliente">Situacao</label>
                            <input type="text" class="form-control" id="situacao" name="situacao" value="{{$job->situacao}}">
                        </div>
                        

                        <div class="form-group float-right">
                            <a href="/jobs/apagar/{{ $job->id }}" class="btn btn-danger">Apagar</a>
                            <input type="submit" value="Salvar" class="btn btn-primary ">
                        </div>
                </form>

                
            </div>
        </div>
    </div>


@endsection
