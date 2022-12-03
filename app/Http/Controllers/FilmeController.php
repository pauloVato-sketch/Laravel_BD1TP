<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Filme;
use App\Models\Estudio;
use App\Models\Genero;

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
        return view('Filme/indexFilme',['filmes' => $filmes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudios = Estudio::get();
        $generos = Genero::get();
        return view('Filme/insertFilme',['estudios' => $estudios, 'generos' => $generos]);
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
            'year_prod'=>'required|int',
            'prod_cost'=>'required',
            'avg_cost'=>'required',
            'studio_id'=>'required',
            'gender_id'=>'required'
        ]);
        $filme = new Filme;
        $filme->Titulo = $request->title;
        $filme->Diretor = $request->director;
        $filme->Ano_Producao = $request->year_prod;
        $filme->Custo_Producao = $request->prod_cost;
        $filme->Nota_Geral = $request->avg_cost;
        $filme->Estudio_ID = $request->studio_id;
        $filme->Genero_ID = $request->gender_id;
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
        $filme = Filme::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        $estudios = Estudio::get();
        $generos = Genero::get();

        return view('Filme/insertFilme',['filme' => $filme, 'estudios'=>$estudios, 'generos'=>$generos]);
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
            'prod_cost'=>'required',
            'avg_cost'=>'required',
            'year_prod'=>'required|int'
        ]);
        $filme = Filme::find($request->id);
        $filme->Titulo = $request->title;
        $filme->Diretor = $request->director;
        $filme->Custo_Producao = $request->prod_cost;
        $filme->Nota_Geral = $request->avg_cost;
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
        return view('Filme/deleteFilme',['filmes' => $filmes]);
    }
    
}
