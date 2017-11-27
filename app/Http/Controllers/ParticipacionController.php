<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Medida;
use App\Participa;
class ParticipacionController extends Controller
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
    public function createP($id)
    {

        $user=Auth::user();
        //dd($user);

        if($user!=null){

            return redirect()->route('participa.usuarioR',['medida_id' =>$id]);
        }

        else {

            return 'No estas log, llena el formulario';

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    public function inscribirUsuarioR($id){

        $participante=new Participa;

        $medida=Medida::find($id);


        $user=Auth::user();


        $participante->nombre=$user->nombre;
        $participante->apellido=$user->apellido;
        $participante->email=$user->email;
        $participante->rut=$user->rut;
        $participante->user_id=$user->id;
        $participante->medida_id=$medida->id;
       

        $participante->save();

        return redirect()->route('inicio');

    }
}
