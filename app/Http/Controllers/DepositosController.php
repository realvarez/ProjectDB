<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposito;

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
            'cantidad' => 'required|string',
            'rut' => 'required|string',
            'email' => 'required|string',
            'nombre' => 'required|string',
            'apellido' => 'required|string',


            
        ]);





        $deposito = new Deposito;

        $deposito->user_id = 1; //depende del usuario conectado
        $deposito->medida_id = $request->id;
        $deposito->rut = 123456789; //depende del usuario conectado
        $deposito->cantidad = $request->monto;
        $deposito->fechaDeposito = '2000-01-01';
        $deposito->documento = "deposito";
        $deposito->save();

        
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
