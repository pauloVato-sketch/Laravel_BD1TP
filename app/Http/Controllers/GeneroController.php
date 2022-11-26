<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = Genero::get();
        return view('Genero/indexGenero',['generos' => $generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Genero/insertGenero');
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
            'description'=>'required'
        ]);
        $Genero = new Genero;
        $Genero->Descricao = $request->description;
        $Genero->save();
        return redirect()->route('genero.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Genero = Genero::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $Genero)
    {
        return view('Genero/insertGenero',['genero' => $Genero]);
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
            'description'=>'required'
        ]);
        $Genero = Genero::find($request->id);
        $Genero->Descricao = $request->description;
        $Genero->save();
        return redirect()->route('genero.index');
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
        $Genero = Genero::find($request->id);
        $Genero->delete();
        return redirect()->route('genero.index');
    }

    /* GET */
    public function delTemp()
    {
        $generos = Genero::get();
        return view('Genero/deleteGenero',['generos' => $generos]);
    }
}
