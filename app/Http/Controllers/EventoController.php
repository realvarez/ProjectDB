<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Medida;

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
        //
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
            'Region' => 'required|string',
            'Comuna' => 'required|string',
            'Direccion' => 'required|string',
            'metaDinero' => 'required|string'

            ]
        );

         $evento=new Recoleccion;
         $evento->metaDinero=$request->metaDinero;
        
         $evento->region=$request->Region;
         $evento->comuna=$request->Comuna;
         $evento->direccion=$request->Direccion;

       

         $medida=array(

            'catastrove_id' => 1, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            'tipo_medida' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

            );
        $evento->save();
        $evento->medida()->create($medida);
         
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
