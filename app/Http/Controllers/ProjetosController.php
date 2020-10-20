<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;

class ProjetosController extends Controller
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
        // Não que esquece de utilizar o Model no inicio da classe: use App\Models\Category;
        $projetos = Projeto::orderBy('id', 'DESC')->get();
 
        // Repassando para a view
        return view('projetos.index', compact('projetos'));

        // return view('projetos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projetos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Projeto $projeto)
    {
       // Insere uma nova categoria, de acordo com os dados informados pelo usuário
    $insert = $projeto->create($request->all());
 
    // Verifica se inseriu com sucesso
    // Redireciona para a listagem das categorias
    // Passa uma session flash success (sessão temporária)
    if ($insert)
        return redirect()
                    ->route('projetos')
                    ->with('success', 'Projeto inserido com sucesso!');
 
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
        // return view('projetos.editar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = Projeto::find($id); 
        if (isset($projeto)) {
            return view('projetos.editar', compact('projeto'));
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
        $projeto = Projeto::find($id); 

        if (isset($projeto)) {
            
            $projeto->projeto = $request->input('projeto');
            $projeto->cliente = $request->input('cliente');
            $projeto->briefing = $request->input('briefing');
                

            $projeto->save();

        } 

        return redirect()
                    ->route('projetos')
                    ->with('success', 'Projeto atualizado com sucesso!');

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
        $projeto = Projeto::find($id); 
        if (isset($projeto)) {
            $projeto->delete();
        }

        return redirect()
                    ->route('projetos')
                    ->with('success', 'Projeto apagado com sucesso!');

        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao apagar');            
    }
}
