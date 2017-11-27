<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Medida;
use App\Catastrove;
use App\Tipo_catastrove;
class MedidasController extends Controller
{
    public function mcrits(){
        $carbon = new \Carbon\Carbon();
        $to = $carbon->now();
        $medidas = Medida::all()
            ->where('avance','>',60)
            ->where('estado',"=",1)
            ->where(date_diff($to,'fecha_termino',true),'>','2015-07-20 10:00:00');
        return view('admin', compact('medidas'));
    }

    public function index(){
       $medidas = Medida::all();
       return view('medidas.index', compact('medidas'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

        $medida=Medida::find($id);


        if($medida->MorphMedida_type=='App\Recoleccion'){


            return redirect()->route('recoleccion.show',['recoleccion' =>$medida->MorphMedida_id]);
        }
        else if($medida->MorphMedida_type=='App\Apoyo_economico'){

            return redirect()->route('apoyos.show',['apoyos' =>$medida->MorphMedida_id]);
        }

          else if($medida->MorphMedida_type=='App\Evento'){

            return redirect()->route('eventos.show',['eventos' =>$medida->MorphMedida_id]);
        }

          else if($medida->MorphMedida_type=='App\Voluntariado'){

            return redirect()->route('voluntarios.show',['voluntarios' =>$medida->MorphMedida_id]);
        }


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


        $medida=Medida::find($id);


        if($medida->MorphMedida_type=='App\Recoleccion'){

            $medida->delete();
            return redirect()->route('recoleccion.destroy',['recoleccion' =>$medida->MorphMedida_id]);
        }
        else if($medida->MorphMedida_type=='App\Apoyo_economico'){

            $medida->delete();
            return redirect()->route('apoyos.destroy',['apoyos' =>$medida->MorphMedida_id]);
        }

          else if($medida->MorphMedida_type=='App\Evento'){

            $medida->delete();
            return redirect()->route('eventos.destroy',['eventos' =>$medida->MorphMedida_id]);
        }

          else if($medida->MorphMedida_type=='App\Voluntariado'){

            $medida->delete();
            return redirect()->route('voluntarios.destroy',['voluntarios' =>$medida->MorphMedida_id]);
        }
    }


    public function buscarMedidas($catastrofe_id)

    {
        $c=Catastrove::find($catastrofe_id);
        //$tipoC=Tipo_catastrove::all();

        $medidas=Medida::where('catastrove_id',$catastrofe_id)->paginate(4);
        //dd($medidas[0]->organization->nombre);

        return view('catastrofe',compact('c','medidas'));

    }

    public function createFormulario(Request $request)
    {
        //dd($request);
        //return view('catastrofes');

        //$value=Session::get('c_id','No existe');
        //dd($value);
        if($request->tipo=="c1"){

            return redirect()->route('apoyos.create');
        }
        else if($request->tipo=="c2"){

            return redirect()->route('voluntarios.create');
        }
        else if($request->tipo=="c3"){

            return redirect()->route('recoleccion.create');
        }

        else if($request->tipo=="c4"){

            return  redirect()->route('eventos.create');
        }

    }




    public function crearMedidas($catastrofe_id){


        Session::put('c_id',$catastrofe_id);

        return view('medidas.crear',compact('catastrofe_id'));
    }

    public function activarMedida($id){


        $medida=Medida::find($id);

        $medida->estado=1;

        $medida->save();

        return redirect()->route('medidas.index');
    }



}
