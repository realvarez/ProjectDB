<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catastrove;
use App\Comuna;
use App\Region;
use Twitter;
class CatastrovesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $catastroves= Catastrove::paginate(3);
      $comunas = Comuna::all();
      $regiones = Region::all();
      $numero=12;
      return view('inicio',compact('catastroves','comunas','regiones','numero'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunas=Comuna::all();
        return view('catastrofes.crear',compact('comunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validacion
        $this->validate($request,[

            'descripcion' => 'required|string',
            'comuna' => 'required|string',
            'titulo' => 'required|string'

            ]);

        //Crear
        $comuna= Comuna::where('nombre', $request->comuna)->get();

        $catastrofe= new Catastrove;
        $catastrofe->descripcion=$request->descripcion;
        $catastrofe->tipo_catastrofe=2;
        $catastrofe->titulo=$request->titulo;
        $catastrofe->user_id=2; // Por ahora constante
        $catastrofe->comuna()->associate($comuna[0]);


       $catastrofe->save();

        //Twitteo de catastrofe
        $newTwitte = ['status' => $request->titulo." en ".$request->comuna.". Descrip: ".$request->descripcion];
        $twitter = Twitter::postTweet($newTwitte);
        //Redireccion

      return  redirect()->route('catastrofes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catastrofe=Catastrove::find($id);

        return view ('catastrofe',compact('catastrofe'));
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
        $catastrofe=Catastrove::find($id);

        $catastrofe->descripcion=$request->descripcion;
        $catastrofe->titulo=$request->titulo;
        $catastrofe->save();

        return redirect()->route('catastrofes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catastrofe=Catastrove::find($id);

        $catastrofe->delete();

        return redirect()->route('catastrofes.index');

    }
}
