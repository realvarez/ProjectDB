<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Medida;
use App\Catastrove;
use App\Tipo_catastrove;
class MedidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $medida = Medida::all();


       return view('medidas.index', compact('medida'));


   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   



        //return view('medidas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


    public function buscarMedidas($catastrofe_id)

    {   
        $c=Catastrove::find($catastrofe_id);
        //$tipoC=Tipo_catastrove::all();

        $medidas=Medida::where('catastrove_id',$catastrofe_id)->paginate(2);


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

        return redirect()->route('admin');
    }



}
