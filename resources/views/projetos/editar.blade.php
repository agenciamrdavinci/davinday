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
                    <h1 class="mb-0">EDITAR PROJETO</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                <form action="/projetos/{{$projeto->id}}" method="post">
                    @csrf
                    
                    <div class="form-group">
                    <label for="cliente">Projeto</label>
                    <input type="text" class="form-control" id="projeto" name="projeto" value="{{$projeto->projeto}}">
                    </div>

                    <div class="form-group">
                    <label for="cliente">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente" value="{{$projeto->cliente}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="briefing">Briefing</label>
                        <textarea class="form-control" id="briefing" rows="5" name="briefing">{{$projeto->briefing}}</textarea>
                    </div>

                    <div class="form-group float-right">
                        <a href="/projetos/apagar/{{ $projeto->id }}" class="btn btn-danger">Apagar</a>
                        <input type="submit" value="Salvar" class="btn btn-primary ">
                    </div>
                </form>

                
            </div>
        </div>
    </div>


@endsection
