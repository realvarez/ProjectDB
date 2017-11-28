<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Organization;
use App\Organization_user;
use App\Medida;
class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizacion = Organization::all();
        // foreach ($organizacion as $key) {

        //     dd($key->miembros->count);
        // }
        return view('organizacion.index',compact('organizacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $this->validate($request,[
        //     'titulo'=>'required',
        //     'descripcion'=>'required',
        //     'logo'=>'requiered|image',
        // ]);

        $logo = $request->file('logo');

        $organi = Organization::create([
            'nombre' =>  $request->nombre,
            'logo' => $logo->store('organizaciones'),
            'descripcion' =>$request->descripcion,
        ]);

        $new = Organization_user::create([
            'organization_id' => $organi->id,
            'user_id' => Auth::id(),
            'rol' => 4,
        ]);


        return redirect()->route('organizaciones.index'); 
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

    public function medidasIndex($id){


        $medidas=Medida::where('organization_id',$id)->paginate(4);

        return view('organizacion.medidas',compact('medidas'));

    }
}
