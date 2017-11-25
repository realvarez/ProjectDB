<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Recoleccion;
use App\Medida;
use App\Aporte;

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
            $value=Session::get('c_id','No existe');

        
           $this->validate($request,[

            'Descripcion' => 'required|string',
            'Region' => 'required|string',
            
            'titulo' => 'required|string',
            'Comuna' => 'required|string',
            'Direccion' => 'required|string'
            

            ]);
                

         $recoleccion=new Recoleccion;
    
        
         $recoleccion->region=$request->Region;
         $recoleccion->comuna_id=2; //Por ahora constante
         $recoleccion->direccion=$request->Direccion;

       

        $recoleccion->save();

         $medida=array(

            'catastrove_id' => $value, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'titulo' => $request->titulo,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante
            'fecha_inicio' => '2017-3-1', //Por ahora constante
            'fecha_termino' => '2018-3-1' //Por ahora constante

            );
         $recoleccion->medida()->create($medida);

         $contador=0;

         //Se agrega los aportes a la base de datos t se vincula con recoleecion.
         foreach ($request->elemento as $e) {
            
            if($e==null)break;

            $aporte=new Aporte;
            $aporte->nombre=$e;
            $aporte->requeridos=$request->cantidad[$contador];
            $aporte->recolectado=0;
            $aporte->recoleccion_id=$recoleccion->id;
            $aporte->save();
            $contador++;
         }
         
         Session::forget('c_id'); 
         
         return  redirect()->route('medidas.busqueda',$recoleccion->medida->catastrove_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recoleccion=Recoleccion::find($id);


        
        return view('medidas.vista_recoleccion',compact('recoleccion'));
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
