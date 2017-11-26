<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $value=Session::get('c_id','No existe');

        
        $this->validate($request,[

            'Descripcion' => 'required|string',
            'metaDinero' => 'required',
            'actual' => 'required',
            'region_id' => 'required|integer|not_in:0',
            'comuna_id' => 'required|integer|not_in:0',
            'Direccion' => 'required|string',
            'titulo' => 'required|string',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required|after_or_equal:fecha_inicio',
            

        ]
    );

        $evento = new Evento;
        $evento->metaDinero=$request->metaDinero;
        $evento->actualDinero=$request->actual;
        $evento->comuna_id=$request->comuna_id;
        $evento->direccion=$request->Direccion;
        $evento->created_at = $request->fecha_inicio;
        
        
        $evento->save();


        $medida=array(

            'catastrove_id' => $value, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'titulo' => $request->titulo,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

           
            'fecha_inicio' => date_create($request->fecha_inicio),
            'fecha_termino' => date_create($request->fecha_termino)

        );
        
        $evento->medida()->create($medida);
        Session::forget('c_id'); 
        return  redirect()->route('medidas.busqueda',$evento->medida->catastrove_id);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento=Evento::find($id);

        return view('medidas.vista_evento',compact('evento'));
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
