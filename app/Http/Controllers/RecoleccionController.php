<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Recoleccion;
use App\Medida;
use App\Aporte;
use App\Aportes_usuario;
use App\Comentario;
use DB;

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
        $regiones = DB::table('regions')->pluck("nombre","id")->all();
        return view('medidas.recoleccion_crear',compact('regiones'));
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

            'titulo' => 'required|string',
            'Descripcion' => 'required|string',
            'region_id' => 'required|int|not_in:0',
            'comuna_id' => 'required|int|not_in:0',
            'Direccion' => 'required|string',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required|after_or_equal:fecha_inicio',
        //validar la lista de cosas que trae.

        ]);

        $duracion = date_diff(date_create($request->fecha_inicio),date_create($request->fecha_termino))->format('%d');
        //Si se borra atributo region de recoleccion hay que cambiar esta linea
        $nombre_region = DB::table('regions')->pluck("nombre","id")->where('id',$request->region_id);
        $recoleccion=new Recoleccion;
        $recoleccion->region = $nombre_region;
        $recoleccion->comuna_id=$request->comuna_id; //Por ahora constante
        $recoleccion->direccion=$request->Direccion;
        $recoleccion->created_at = $request->fecha_inicio;



        $recoleccion->save();

        $medida=array(

            'catastrove_id' => $value, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'titulo' => $request->titulo,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante
            'fecha_inicio' => date_create($request->fecha_inicio),
            'fecha_termino' => date_create($request->fecha_termino)

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
        $comentario=Comentario::where('medida_id',$recoleccion->medida->id)->get();

        
        return view('medidas.vista_recoleccion',compact('recoleccion','comentario'));
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
         $recoleccion=Recoleccion::find($id);

        $recoleccion->delete();
        return redirect()->route('medidas.index');
    }

    public function crearCooperacion(Request $request, $id){



        $this->validate($request,[

            
            'email' => 'required|string',
        //validar la lista de cosas que trae.

        ]);


        $recoleccion=Recoleccion::find($id);

        $aportes=$recoleccion->aporte;

       
        $user=Auth::user();
        //dd($aportes);
        $acumulador=0;
        foreach($aportes as $a){


            $acumulador++;
        }


        $contador=0;

        foreach ($aportes as $a) {
                        
            if($request->aportes[$contador]>=0){

                $aporte_usuario=new Aportes_usuario;

                if($user!=null){

                    $aporte_usuario->user_id=$user->id;
                    
                }

                $aporte_usuario->cantidad=$request->aportes[$contador];
                $aporte_usuario->email=$request->email;
                $aporte_usuario->aporte_id=$a->id;
                $aporte_usuario->save();

                $a->recolectado=$a->recolectado+$request->aportes[$contador];
                $a->save();

                if($a->recolectado==$a->requeridos){

                    $medida=$recoleccion->medida;
                    
                    $porcentaje=100/$acumulador;
                    $medida->avance=$medida->avance+((int) $porcentaje);
                    $medida->save();

                }
            }
            $contador++;


        }
        
        return redirect()->route('inicio');

    }
}
