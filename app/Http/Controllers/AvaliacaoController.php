<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Avaliacao;
use App\Models\Filme;
use App\Models\Usuario;

class AvaliacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacoes = Avaliacao::get();
        //print_r($avaliacoes."\n".$f."\n".$f->first()."\n".$a);die;
        return view('avaliacao/indexAvaliacao',['avaliacoes' => $avaliacoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = Filme::get();
        $usuarios = Usuario::get();
        return view('avaliacao/insertAvaliacao', ['filmes'=>$filmes, 'usuarios'=>$usuarios]);
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
            'score'=>'required',
            'movie_id'=>'required',
            'usuario_id'=>'required'
        ]);
        $avaliacao = new Avaliacao;
        $avaliacao->Nota = $request->score;
        $avaliacao->Filme_ID = $request->movie_id;
        $avaliacao->Usuario_ID = $request->usuario_id;
        $avaliacao->save();
        return redirect()->route('avaliacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avaliacao = Avaliacao::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($filme_id, $Usuario_ID)
    {
        $avaliacao = Avaliacao::where('Filme_ID', '=', $filme_id)
                              ->where('Usuario_ID', '=', $Usuario_ID)->first();
        $filmes = Filme::get();
        $usuarios = Usuario::get();
        return view('avaliacao/insertAvaliacao',['avaliacao'=>$avaliacao,'filmes' => $filmes,'usuarios'=>$usuarios]);
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
            'score'=>'required',
            'movie_id'=>'required',
            'usuario_id'=>'required'  
        ]);

        $avaliacao = DB::table('avaliacoes')
                      ->where('Filme_ID','=',$request->movie_id)
                      ->where('Usuario_ID','=',$request->usuario_id)
                      ->update(['Nota' => $request->score]);
        return redirect()->route('avaliacao.index');
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
        $keys = explode(" ", $request->id);
        $filme_id = $keys[0];
        $Usuario_ID = $keys[1];
        $avaliacao = DB::table('Avaliacoes')
                    ->where('Filme_ID','=',$filme_id)
                    ->where('Usuario_ID','=',$Usuario_ID)
                    ->delete();
        
        return redirect()->route('avaliacao.index');
    }

    /* GET */
    public function delTemp()
    {
        $avaliacoes = Avaliacao::get();
        $filmes = array();
        $usuarios = array();
        foreach($avaliacoes as $avaliacao){
            $filme = array(Filme::find($avaliacao->Filme_ID));
            $Usuario = array(Usuario::find($avaliacao->Usuario_ID));
            $filmes = array_merge($filmes, $filme);
            $usuarios = array_merge($usuarios, $Usuario);
        }
        
        return view('avaliacao/deleteAvaliacao',['avaliacoes' => $avaliacoes, 'filmes' => $filmes,'usuarios'=>$usuarios]);
    }
}
