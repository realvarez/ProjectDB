<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Deposito;
use App\Medida;
use App\Apoyo_economico;

class DepositosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {



        $this->validate($request,[
            'monto' => 'required|string',
            'rut' => 'required|string',
            'email' => 'required|string',
            'nombre' => 'required|string',
            'apellido' => 'required|string',


            
        ]);



        $user=Auth::user();
        $deposito = new Deposito;

        if($user!=null){

        $deposito->user_id = $user->id; //depende del usuario conectado

        }

        $deposito->medida_id =$id;
        $deposito->rut = $request->rut; //depende del usuario conectado
        $deposito->cantidad = $request->monto;
        $deposito->nombre=$request->nombre;
        $deposito->apellido=$request->apellido;
        $deposito->email=$request->email;
        $deposito->save();

        $medida=Medida::find($id);
        $apoyo=Apoyo_economico::find($medida->MorphMedida_id);

        $porcentaje=($apoyo->actual*100)/$apoyo->metaMinima;
        $medida->avance=(int)$porcentaje;
        $medida->save();



        return redirect()->route('inicio');
    
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
        dd($request);
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
