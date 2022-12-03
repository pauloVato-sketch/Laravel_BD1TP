<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elenco;
use Illuminate\Support\Facades\DB;

use App\Models\Filme;
use App\Models\Ator;

class ElencoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elencos = Elenco::get();
        //print_r($elencos."\n".$f."\n".$f->first()."\n".$a);die;
        return view('elenco/indexElenco',['elencos' => $elencos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = Filme::get();
        $atores = Ator::get();
        return view('elenco/insertElenco', ['filmes'=>$filmes, 'atores'=>$atores]);
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
            'role'=>'required',
            'character'=>'required',
            'movie_id'=>'required',
            'actor_id'=>'required'
        ]);
        $elenco = new Elenco;
        $elenco->Papel = $request->role;
        $elenco->Personagem = $request->character;
        $elenco->Filme_ID = $request->movie_id;
        $elenco->Ator_ID = $request->actor_id;
        $elenco->save();
        return redirect()->route('elenco.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elenco = Elenco::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($filme_id, $ator_id)
    {
        $elenco = Elenco::where('Filme_ID', '=', $filme_id)
                        ->where('Ator_ID', '=', $ator_id)->first();
        $filmes = Filme::get();
        $atores = Ator::get();
        return view('elenco/insertElenco',['elenco'=>$elenco,'filmes' => $filmes,'atores'=>$atores]);
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
            'role'=>'required',
            'character'=>'required',
            'movie_id'=>'required',
            'actor_id'=>'required'  
        ]);

        $elenco = DB::table('Elencos')
                      ->where('Filme_ID','=',$request->movie_id)
                      ->where('Ator_ID','=',$request->actor_id)
                      ->update(['Papel' => $request->role, 'Personagem'=>$request->character]);
        return redirect()->route('elenco.index');
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
        $ator_id = $keys[1];
        $elenco = DB::table('Elencos')
                    ->where('Filme_ID','=',$filme_id)
                    ->where('Ator_ID','=',$ator_id)
                    ->delete();
        
        return redirect()->route('elenco.index');
    }

    /* GET */
    public function delTemp()
    {
        $elencos = Elenco::get();
        $filmes = array();
        $atores = array();
        foreach($elencos as $elenco){
            $filme = array(Filme::find($elenco->Filme_ID));
            $ator = array(Ator::find($elenco->Ator_ID));
            $filmes = array_merge($filmes, $filme);
            $atores = array_merge($atores, $ator);
        }
        
        return view('elenco/deleteElenco',['elencos' => $elencos, 'filmes' => $filmes,'atores'=>$atores]);
    }
}
