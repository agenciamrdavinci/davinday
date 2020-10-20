<?php

use App\Projeto;
$projetos = DB::table('projetos')->get();

?>

<div class="col col-md-2 sidebar-left">

  <div class="card mb-3">
      <img src="https://ustp.st/admin/files/content/570aaa13-ae06-4872-a7c7-926081ccb39a.png" class="img-fluid float-left rounded-circle avatar mb-2" alt="">
      <a class="mb-0 nome" href="{{URL::route('user')}}">{{ Auth::user()->name }} {{Auth::user()->sobrenome}}</a>
      <p class="mb-0 cargo">{{Auth::user()->cargo}}</p>
  </div>

  <section class="projetos">
    
      <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">Projetos <a href="{{route('projetos.create')}}" class="adicionar_projeto">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </a></li>

          @forelse ( $projetos as $projeto )
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="cliente" href="{{route('projetos.edit',$projeto->id)}}">{{$projeto->cliente}} </a>  
                {{-- <span class="badge badge-primary badge-pill">14</span> --}}
                <i class="fa fa-chevron-down down" aria-hidden="true"></i>

            </li>
          @empty
          <li class="list-group-item d-flex justify-content-between align-items-center">Nenhum projeto</li>
          @endforelse

          
      </ul>

      {{-- <p class="adicionar_projeto mt-3">
        <a href="{{route('projetos.create')}}">
          <i class="fa fa-plus-circle" aria-hidden="true"></i>
         Adicionar
        </a>
      </p> --}}
      

  </section>
</div>