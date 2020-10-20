<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('user');

        $user = User::get();
 
        // Repassando para a view
        return view('user.index', compact('user'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id); 

        if (isset($user)) {
            
            $user->name = $request->input('nome');
            $user->sobrenome = $request->input('sobrenome');
            $user->email = $request->input('email');
            $user->celular = $request->input('celular');
            $user->endereco = $request->input('endereco');
            $user->numero = $request->input('numero');
            $user->complemento = $request->input('complemento');
            $user->bairro = $request->input('bairro');
            $user->cidade = $request->input('cidade');
            $user->uf = $request->input('uf');
            $user->cep = $request->input('cep');
            $user->empresa = $request->input('empresa');
            $user->cargo = $request->input('cargo');
                

            $user->save();

        } 

        return redirect()
                    ->route('user')
                    ->with('success', 'Dados atualizado com sucesso!');

        // Redireciona de volta com uma mensagem de erro
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar');  


    }
    
    
}
