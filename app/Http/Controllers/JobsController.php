<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id', 'DESC')->get();
 
        // Repassando para a view
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Job $jobs)
    {
        $insert = $jobs->create($request->all());
 
        // Verifica se inseriu com sucesso
        // Redireciona para a listagem das categorias
        // Passa uma session flash success (sessão temporária)
        if ($insert)
            return redirect()
                        ->route('jobs')
                        ->with('success', 'Job inserido com sucesso!');
    
        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id); 
        if (isset($job)) {
            return view('jobs.editar', compact('job'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jobs = Job::find($id); 

        if (isset($jobs)) {
            
            $jobs->titulo = $request->input('titulo');
            $jobs->prazo = $request->input('prazo');
            $jobs->concluido_prazo = $request->input('concluido_prazo');
            $jobs->projeto_id = $request->input('projeto_id');
            $jobs->cliente_id = $request->input('cliente_id');   
            $jobs->subtarefas = $request->input('subtarefas');   
            $jobs->horas = $request->input('horas');
            $jobs->responsavel = $request->input('responsavel');
            $jobs->envolvidos = $request->input('envolvidos');
            $jobs->status = $request->input('status');
            $jobs->situacao = $request->input('situacao');

            $jobs->save();

        } 

        return redirect()
                    ->route('jobs')
                    ->with('success', 'Job atualizado com sucesso!');

        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs = Job::find($id); 
        if (isset($jobs)) {
            $jobs->delete();
        }

        return redirect()
                    ->route('jobs')
                    ->with('success', 'Job apagado com sucesso!');

        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao apagar');            
    }
}
