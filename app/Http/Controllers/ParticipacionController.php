<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Medida;
use App\Participa;
use App\Voluntariado;
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

            return  view('medidas.formulario_participa',compact('id'));

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

        if($medida->MorphMedida_type=='App\Voluntariado'){


            $Voluntariado=Voluntariado::find($medida->MorphMedida_id);
            $Voluntariado->voluntariosActuales++;
            $porcentaje=(($Voluntariado->voluntariosActuales)*100)/$Voluntariado->metaVoluntarios;
            $medida->avance=$porcentaje;
            $medida->save();
            $Voluntariado->save();
        }

        return redirect()->route('inicio');

    }

      public function inscribirUsuario(Request $request,$id){



        $participante=new Participa;

        $medida=Medida::find($id);


        
        $this->validate($request,[
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|string',
            'rut' => 'required|string',


            
        ]);




        $participante->nombre=$request->nombre;
        $participante->apellido=$request->apellido;
        $participante->email=$request->email;
        $participante->rut=$request->rut;
        $participante->user_id=null;
        $participante->medida_id=$medida->id;
       

        $participante->save();

        if($medida->MorphMedida_type=='App\Voluntariado'){


            $Voluntariado=Voluntariado::find($medida->MorphMedida_id);
            $Voluntariado->voluntariosActuales++;
            $porcentaje=(($Voluntariado->voluntariosActuales)*100)/$Voluntariado->metaVoluntarios;
            $medida->avance=$porcentaje;
            $medida->save();
            $Voluntariado->save();
        }

        return redirect()->route('inicio');

    }
}
