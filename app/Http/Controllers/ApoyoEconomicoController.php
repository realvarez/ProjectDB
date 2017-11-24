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

            //return 'creo apoyo';
        $this->validate($request,[

            'Descripcion' => 'required|string',
         
            //'metaMinima' => 'required|Integer',
            //'numCuenta' => 'required|string',
            'tipoCuenta' => 'required|string',
            'bancoCuenta' => 'required|string',
            'titularCuenta' => 'required|string',
            'correoCuenta' => 'required|string'



            ]
        );

         $apoyo=new Apoyo_economico;
         $apoyo->metaMinima=$request->metaMinima;
         $apoyo->numCuenta=$request->numCuenta;
         $apoyo->TipoCuenta=$request->tipoCuenta;
         $apoyo->bancoCuenta=$request->bancoCuenta;
         $apoyo->titularCuenta=$request->titularCuenta;
         $apoyo->correoCuenta=$request->correoCuenta;
      
        
       
         $apoyo->save();

         $medida=array(

            'catastrove_id' => 1, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            'tipo_medida' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

            );
        
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
