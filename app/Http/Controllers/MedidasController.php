<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medida;
use App\Catastrove;
use App\Tipo_catastrove;
class MedidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $medida = Medida::all();


        return view('medidas.index', compact('medida'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $c1='Apoyo economico';
        $c2='Recoleccion';
        $c3='Voluntariado';
        $c4='Evento';
        $paso=1;
        return view('medidas.crear',compact('c1','c2','c3','c4','paso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function buscarMedidas($catastrofe_id)

    {
        $c=Catastrove::find($catastrofe_id);
        //$tipoC=Tipo_catastrove::all();

        $medidas=Medida::where('catastrove_id',$catastrofe_id)->get();

      
        return view('catastrofe',compact('c','medidas'));

    }



}
