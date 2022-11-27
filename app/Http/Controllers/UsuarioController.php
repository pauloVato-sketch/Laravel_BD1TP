<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return view('Usuario/indexUsuario',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario/insertUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $usuario = new Usuario;
        $usuario->Nome = $request->name;
        $usuario->Login = $request->username;
        $usuario->Tipo = 'TOY';
        $usuario->Senha = $request->password;
        $usuario->save();

        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Usuario = Usuario::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('Usuario/insertUsuario',['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        $usuario = Usuario::find($request->id);
        $usuario->Nome = $request->name;
        $usuario->Login = $request->username;
        $usuario->Senha = $request->password;
        $usuario->save();

        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id'=>'required'
        ]); 
        $usuario = Usuario::find($request->id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }

    /* GET */
    public function delTemp()
    {
        $usuarios = Usuario::get();
        return view('Usuario/deleteUsuario',['usuarios' => $usuarios]);
    }
}
