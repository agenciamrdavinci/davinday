@extends('layouts.interna')

@section('titulo', 'Profile')

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

                <form>    
                    <div class="form-group">
                    <label for="sobrenome">Nome</label>
                        <input type="text" class="form-control" id="nome" >
                    </div>

                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" >
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" >
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress2">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="inputState" class="form-control">
                                <option selected>SP</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Cep</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" class="form-control-file" id="picture">
                    </div>

                    <div class="form-group">
                        <!-- <label for="biografia">Biografia</label> -->
                        <textarea class="form-control" id="biografia" rows="3" placeholder="Biografia"></textarea>
                    </div>
                </form>

                
            </div>
        </div>
    </div>

@endsection
