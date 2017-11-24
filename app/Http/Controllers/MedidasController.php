<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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



        return view('medidas.crear');
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
            return 'probando';
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

        $medidas=Medida::where('catastrove_id',$catastrofe_id)->get();


        return view('catastrofe',compact('c','medidas'));

    }

    public function createFormulario(Request $request)
    {   
        //dd($request);
        //return view('catastrofes');

        
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




        return view('medidas.crear');
        

    }



}
