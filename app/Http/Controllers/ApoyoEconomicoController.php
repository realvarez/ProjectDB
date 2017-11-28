<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Apoyo_economico;
use App\Medida;
use App\Comentario;
use App\Historia;
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

        $value=Session::get('c_id','No existe');
        //dd($value);
            //return 'creo apoyo';
        $this->validate($request,[

            'titulo' => 'required|string',
            'Descripcion' => 'required|string',
            'metaMinima' => 'required|Integer',
            'numCuenta' => 'required|Integer',
            'bancoCuenta' => 'required|string',
            'tipoCuenta' => 'required|string',
            'titularCuenta' => 'required|string',
            'correoCuenta' => 'required|string',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required|after_or_equal:fecha_inicio'
        ]
    );

        $apoyo=new Apoyo_economico;
        $apoyo->metaMinima=$request->metaMinima;
        $apoyo->numCuenta=$request->numCuenta;
        $apoyo->TipoCuenta=$request->tipoCuenta;
        $apoyo->bancoCuenta=$request->bancoCuenta;
        $apoyo->titularCuenta=$request->titularCuenta;
        $apoyo->correoCuenta=$request->correoCuenta;
        $apoyo->created_at = $request->fecha_inicio;

        

        $apoyo->save();


        $medida=array(

            'catastrove_id' => $value, //Por ahora constante
            'descripcion' => $request->Descripcion,
            'titulo' =>$request->titulo,
            'user_id' => 1, //Por ahora constante
            'organization_id' =>1, //Por ahora constante

            
            'fecha_inicio' => date_create($request->fecha_inicio),
            'fecha_termino' => date_create($request->fecha_termino)

        );

        $log = Historia::create([
            'user_id' => Auth::id(),
            'tipo_cambio' => 2,
            'tabla' => 'Apoyo_economico',
            'estado_antiguo' => '',
            'estado_nuevo' => $request->titulo,
        ]);
        $apoyo->medida()->create($medida);
        
        Session::forget('c_id'); 
        return  redirect()->route('medidas.busqueda',$apoyo->medida->catastrove_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apoyo=Apoyo_economico::find($id);
          $comentario=Comentario::where('medida_id',$apoyo->medida->id)->get();
        

        return view('medidas.vista_apoyo',compact('apoyo','comentario'));
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
        $apoyo=Apoyo_economico::find($id);
        
        $log = Historia::create([
            'user_id' =>  Auth::id(),
            'tipo_cambio' => 'Delete',
            'tabla' => 'Apoyo_economicos',
            'estado_antiguo' => $apoyo->titulo,
            'estado_nuevo' => '',
        ]);
        $apoyo->delete();
          $user=Auth::user();
        if($user->rol_id==1){

            
        return redirect()->route('medidas.index');
        }


        else{

            return redirect()->route('organizacion.medidas');

        }

    }
}
