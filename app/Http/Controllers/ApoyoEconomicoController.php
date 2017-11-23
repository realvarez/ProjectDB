<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apoyo_economico;
use App\Medida;

class ApoyoEconomicoController extends Controller
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
        return view('medidas.apoyo_economico_crear');
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
             'metaMinima' => 'required|Integer',
            'numCuenta' => 'required|string',
            'TipoCuenta' => 'required|string',
            'bancoCuenta' => 'required|string',
            'titularCuenta' => 'required|string',
            'correoCuenta' => 'required|string'



            ]
        );

         $apoyo=new Apoyo_economico;
         $apoyo->metaMinima=$request->metaMinima;
         $apoyo->numCuenta=$request->numCuenta;
         $apoyo->TipoCuenta=$request->TipoCuenta;
         $apoyo->bancoCuenta=$request->bancoCuenta;
         $apoyo->titularCuenta=$request->titularCuenta;
         $apoyo->correoCuenta=$request->correoCuenta;
         $apoyo->region=$request->Region;
         $apoyo->comuna=$request->Comuna;
         $apoyo->direccion=$request->Direccion;

       

         $medida=array(

            'catastrove_id' => 1, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            'tipo_medida' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

            );
        $apoyo->save();
        $apoyo->medida()->create($medida);
         
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
