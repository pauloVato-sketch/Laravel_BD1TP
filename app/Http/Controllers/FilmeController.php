<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Filme;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::get();
        return view('indexFilme',['filmes' => $filmes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insertFilme');
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
            'title'=>'required',
            'director'=>'required',
            'year_prod'=>'required|int'
        ]);
        $filme = new Filme;
        $filme->Titulo = $request->title;
        $filme->Diretor = $request->director;
        $filme->Ano_Producao = $request->year_prod;
        $filme->save();
        return redirect()->route('filme.index');
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
    public function edit(Filme $filme)
    {
        return view('insertFilme',['filme' => $filme]);
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
            'title'=>'required',
            'director'=>'required',
            'year_prod'=>'required|int'
        ]);
        $filme = Filme::find($request->id);
        $filme->Titulo = $request->title;
        $filme->Diretor = $request->director;
        $filme->Ano_Producao = $request->year_prod;
        $filme->save();
        return redirect()->route('filme.index');
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
        $filme = Filme::find($request->id);
        $filme->delete();
        return redirect()->route('filme.index');
    }

    /* GET */
    public function delTemp()
    {
        $filmes = Filme::get();
        return view('deleteFilme',['filmes' => $filmes]);
    }
    
}
