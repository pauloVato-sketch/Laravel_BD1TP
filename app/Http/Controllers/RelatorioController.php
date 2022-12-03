<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Relatorio/indexRelatorios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($op)
    {
        
        switch($op){
            case 1:{
                $var = DB::table('Elencos')
                    ->leftJoin('Filmes','Elencos.Filme_ID','=','Filmes.ID')
                    ->join('Atores','Elencos.Ator_ID','=','Atores.ID')
                    ->select('Filmes.Titulo', DB::raw('Atores.Primeiro_Nome || " " || Atores.Nome_Meio || " " ||Atores.Ultimo_Nome as nome_completo' ), 'Elencos.Papel','Elencos.Personagem')
                    ->get();
                return view('Relatorio/showRelatorio',['var'=>$var, 'op'=>$op]);
                break;
            }
            case 2:{
                $var = DB::table('Avaliacoes')
                    ->join('Filmes','Avaliacoes.Filme_ID','=','Filmes.ID')
                    ->leftJoin('Usuarios','Avaliacoes.Usuario_ID','=','Usuarios.ID')
                    ->join('Estudios','Filmes.ID','=','Estudios.ID')
                    ->select('Filmes.Titulo','Filmes.Ano_Producao', 'Estudios.Nome','Filmes.Diretor','Usuarios.Login','Avaliacoes.Nota')
                    ->get();
                return view('Relatorio/showRelatorio',['var'=>$var, 'op'=>$op]);
                break;
            }
            case 3:{
                $var = DB::table('Avaliacoes')
                    ->join('Filmes','Avaliacoes.Filme_ID','=','Filmes.ID')
                    ->groupBy('Filmes.ID')
                    ->join('Estudios','Filmes.ID','=','Estudios.ID')
                    ->select('Filmes.Titulo','Filmes.Ano_Producao', 'Estudios.Nome','Filmes.Diretor',DB::raw('AVG(Avaliacoes.Nota) as Media'))
                    ->get();
                return view('Relatorio/showRelatorio',['var'=>$var, 'op'=>$op]);
                break;
            }
            case 4:{

                $var = DB::table('Filmes')
                    ->join('Estudios','Filmes.Estudio_ID','=','Estudios.ID')
                    ->select('Estudios.ID','Estudios.Nome', DB::raw('AVG(Filmes.Custo_Producao) as media_custo' ))
                    ->groupBy('Estudios.ID')
                    ->having('Filmes.Ano_Producao', '>=', 2010)
                    ->get();
                return view('Relatorio/showRelatorio',['var'=>$var, 'op'=>$op]);
                break;
            }
            case 5:{
                $aux = DB::table('Filmes')
                    ->select('Filmes.ID','Filmes.Estudio_ID','Filmes.Genero_ID','Filmes.Titulo', 'Filmes.Ano_Producao','Filmes.Diretor','Filmes.Custo_Producao');
                
                $temp = DB::table('Estudios')   
                    ->select('Estudios.Nome')                 
                    ->joinSub($aux,'movies', 
                        function ($join) {
                            $join->on('Estudios.ID', '=', 'movies.Estudio_ID');
                        }) 
                    ->join('Generos','Generos.ID','=','movies.Genero_ID')              
                    ->orderByDesc('movies.Custo_Producao')
                    ->limit(5);
                $temp2 = $temp->addSelect('Generos.Descricao');
                $var = $temp2->addSelect('movies.Titulo', 'movies.Ano_Producao','movies.Diretor','movies.Custo_Producao')
                ->get();
                return view('Relatorio/showRelatorio',['var'=>$var, 'op'=>$op]);
                break;
            }
        } 

    }

}
