<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntariado;
use App\Medida;
class VoluntariosController extends Controller
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
        //return 'sksksksks';

        return view('medidas.voluntarios_crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){




         $this->validate($request,[

            'Descripcion' => 'required|string',
            'Region' => 'required|string',
            'Comuna' => 'required|string',
            'Direccion' => 'required|string'


            ]);


         $voluntario=new Voluntariado;
         $voluntario->metaVoluntarios=$request->Meta;
         $voluntario->duracionDias=10;
         $voluntario->region=$request->Region;
         $voluntario->comuna=$request->Comuna;
         $voluntario->direccion=$request->Direccion;

         /*$medida=new Medida;

         $medida->descripcion=$request->Descripcion;
         $medida->user_id=1;
         $medida->catastrove_id=1;
         $medida->organization_id=1;
         $medida->tipo_medida=1;*/

         $medida=array(

            'catastrove_id' => 2,
            'descripcion' => $request->Descripcion,
            'user_id' => 1,
            'organization_id' =>1,

            'tipo_medida' =>1,
            'fecha_inicio' => '2017-3-1',
            'fecha_termino' => '2018-3-1'

            );
          $voluntario->save();
         $voluntario->medida()->create($medida);
         dd($voluntario);
         return 'ksksksks';

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
