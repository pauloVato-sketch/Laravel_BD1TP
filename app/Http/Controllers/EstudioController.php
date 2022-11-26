<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudio;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudios = Estudio::get();
        return view('Estudio/indexEstudio',['estudios' => $estudios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Estudio/insertEstudio');
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
            'name'=>'required'
        ]);
        $Estudio = new Estudio;
        $Estudio->Nome = $request->name;
        $Estudio->save();
        return redirect()->route('estudio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Estudio = Estudio::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudio $Estudio)
    {
        return view('Estudio/insertEstudio',['estudio' => $Estudio]);
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
            'name'=>'required'
        ]);
        $Estudio = Estudio::find($request->id);
        $Estudio->Nome = $request->name;
        $Estudio->save();
        return redirect()->route('estudio.index');
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
        $Estudio = Estudio::find($request->id);
        $Estudio->delete();
        return redirect()->route('estudio.index');
    }

    /* GET */
    public function delTemp()
    {
        $estudios = Estudio::get();
        return view('Estudio/deleteEstudio',['estudios' => $estudios]);
    }
}
