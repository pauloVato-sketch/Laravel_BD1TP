<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;
class AtorController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atores = Ator::get();
        return view('Ator/indexAtor',['atores' => $atores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ator/insertAtor');
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
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required'
        ]);
        $ator = new Ator;
        $ator->Primeiro_Nome = $request->first_name;
        $ator->Nome_Meio = $request->middle_name;
        $ator->Ultimo_Nome = $request->last_name;
        
        $ator->save();
        return redirect()->route('ator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ator = Ator::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ator $ator)
    {
        return view('Ator/insertAtor',['ator' => $ator]);
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
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required'
        ]);
        $ator = Ator::find($request->id);
        $ator->Primeiro_Nome = $request->first_name;
        $ator->Nome_Meio = $request->middle_name;
        $ator->Ultimo_Nome = $request->last_name;
        $ator->save();
        return redirect()->route('ator.index');
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
        $ator = Ator::find($request->id);
        $ator->delete();
        return redirect()->route('ator.index');
    }

    /* GET */
    public function delTemp()
    {
        $atores = Ator::get();
        return view('Ator/deleteAtor',['atores' => $atores]);
    }
}
