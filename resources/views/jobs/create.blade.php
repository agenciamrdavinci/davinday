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
                    <h1 class="mb-0">ADICIONAR TAREFA</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                <form action="{{route('jobs.store')}}" method="post">
                    @csrf
                    
                    <div class="form-group">
                    <label for="cliente">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo">
                    </div>

                    <div class="form-group">
                        <label for="projeto">Projeto</label>
                        <select class="form-control" id="projeto" name="projeto_id">
                          @foreach ($projetos as $p)
                            <option>...</option>
                            <option value="{{$p->id}}">{{$p->id}}</option>
                          @endforeach  
                          
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="cliente">Cliente</label>
                        <select class="form-control" id="cliente" name="cliente_id">
                            @foreach ($projetos as $p)
                                <option>...</option>
                                <option value="{{$p->id}}">{{$p->id}}</option>
                            @endforeach                          
                        </select>
                      </div>

                    <div class="form-group">
                    <label for="cliente">Prazo</label>
                        <input type="text" class="form-control" id="prazo" name="prazo">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Concluído no Prazo</label>
                        <input type="text" class="form-control" id="concluido" name="concluido_prazo">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Subtarefas</label>
                        <input type="text" class="form-control" id="subtarefas" name="subtarefas">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Horas</label>
                        <input type="text" class="form-control" id="horas" name="horas">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Responsável</label>
                        <input type="text" class="form-control" id="responsavel" name="responsavel">
                    </div>

                    <div class="form-group">
                        <label for="envolvidos">Envolvidos</label>
                        <select multiple class="form-control" id="envolvidos" name="envolvidos">
                          <option value="1">Adriana</option>
                          <option value="2">Felipe</option>
                          <option value="3">Lucas Augusto</option>
                          <option value="4">Pedro</option>
                          <option value="5">Mayara</option>
                          <option value="6">Giovana 1</option>
                          <option value="7">Lara</option>
                          <option value="8">Nuno</option>
                          <option value="9">Giovana 2</option>
                        </select>
                      </div>

                    <div class="form-group">
                    <label for="cliente">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Situacao</label>
                        <input type="text" class="form-control" id="situacao" name="situacao">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Salvar" class="btn btn-primary float-right">
                    </div>
                </form>

                
            </div>
        </div>
    </div>

@endsection
