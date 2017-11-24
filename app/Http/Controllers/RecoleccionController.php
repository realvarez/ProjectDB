<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recoleccion;
use App\Medida;

class RecoleccionController extends Controller
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
        return view('medidas.recoleccion_crear');
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
            'metaRecoleccion' => 'required|Integer',
            
            'Comuna' => 'required|string',
            'Direccion' => 'required|string'

            ]);


         $recoleccion=new Recoleccion;
         $recoleccion->metaRecoleccion=$request->metaRecoleccion;
         $recoleccion->tipoRecoleccion=1; //Para que es este atributo
         $recoleccion->region=$request->Region;
         $recoleccion->comuna_id=2; //Por ahora constante
         $recoleccion->direccion=$request->Direccion;

       
        $recoleccion->save();

         $medida=array(

            'catastrove_id' => 1, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            'tipo_medida' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

            );
         $recoleccion->medida()->create($medida);
         
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
