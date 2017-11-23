<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Medida;
use DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones= DB::table('regions')->pluck("nombre","id")->all();
        return view('medidas.evento_crear',compact('regiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[

            'Descripcion' => 'required|string',
            'Meta' => 'required',
            'actual' => 'required',
            'region_id' => 'required|not_in:0',
            'comuna_id' => 'required|not_in:0',
            'Direccion' => 'required|string'
            

        ]
    );

        $evento = new Evento;
        $evento->metaDinero=$request->Meta;
        $evento->actualDinero=$request->actual;
        $evento->comuna_id=$request->comuna_id;
        $evento->direccion=$request->Direccion;
        
        
        $evento->save();


        $medida=array(

            'catastrove_id' => 1, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            'tipo_medida' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

        );
        
        $evento->medida()->create($medida);
        return  redirect()->route('medidas.busqueda',1);
        

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
}
