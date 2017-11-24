<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntariado;
use App\Medida;
use App\Region;
use DB;
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
        $regiones = DB::table('regions')->pluck("nombre","id")->all();
        return view('medidas.voluntarios_crear',compact('regiones'));
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
            'region_id' => 'required|not_in:0',
            'comuna_id' => 'required|not_in:0',
            'Direccion' => 'required|string'


        ]);

        $voluntario=new Voluntariado;
        $voluntario->metaVoluntarios=$request->Meta;
        $voluntario->duracionDias=10;
        $voluntario->comuna_id=$request->comuna_id;
        $voluntario->direccion=$request->Direccion;



        $medida=array(

            'catastrove_id' => 1,
            'descripcion' => $request->Descripcion,
            'user_id' => 1,
            'organization_id' =>1,

            'tipo_medida' =>1,
            'fecha_inicio' => '2017-3-1',
            'fecha_termino' => '2018-3-1'

        );
        $voluntario->save();
        $voluntario->medida()->create($medida);

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
        $voluntario=Voluntariado::find($id);

        //dd($voluntario->medida[0]);
        
        return view('medidas.vista_voluntario',compact('voluntario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $comunas = DB::table('comunas')->where('region_id',$request->region_id)->pluck("nombre","id")->all();
            $data = view('ajax-select',compact('comunas'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}
