<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Organization;
use App\Organization_user;
use App\User;
use App\Medida;
use App\Historia;
class OrganizacionController extends Controller
{
    
    public function indexOrg()
    {
        $organizacion = Organization::all();
        
        return view('organizacion.indexOrg',compact('organizacion'));
    }

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
            'logo' => $logo->store('public\organizaciones'),
            'descripcion' =>$request->descripcion,
        ]);

        $log = Historia::create([
            'user_id' => Auth::id(),
            'tipo_cambio' => 2,
            'tabla' => 'Organization',
            'estado_antiguo' => '',
            'estado_nuevo' => $organi,
        ]);


        $new = Organization_user::create([
            'organization_id' => $organi->id,
            'user_id' => Auth::id(),
            'rol' => 4,
        ]);

        $log = Historia::create([
            'user_id' => Auth::id(),
            'tipo_cambio' => 2,
            'tabla' => 'Organization_user',
            'estado_antiguo' => '',
            'estado_nuevo' => $new,
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
        $organizacion = Organization::find($id);

        $miembros = Organization_user::all()->where('organization_id',$id);
        $usuarios = User::all();
        return view('organizacion.show',compact('organizacion','miembros','usuarios'));
    }


    public function participa($id){

        $organizacion = Organization::find($id);

        if ($organizacion->miembros->where('user_id',Auth::id())->first() != NULL){
            return redirect()->route('organizaciones.show',$id);
        }


        $new = Organization_user::create([
            'organization_id' => $id,
            'user_id' => Auth::id(),
            'rol' => 3,
        ]);

        $log = Historia::create([
            'user_id' => Auth::id(),
            'tipo_cambio' => 2,
            'tabla' => 'Organization_user',
            'estado_antiguo' => '',
            'estado_nuevo' => $new,
        ]);

        return redirect()->route('organizaciones.show',$id);
    }

    public function showOrg($id)
    {
        $organizacion = Organization::find($id);
        
        return view('organizacion.showOrg',compact('organizacion'));
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

    public function medidasIndex(){

        $user=Auth::user();

        $medidas=Medida::where('organization_id',1)->paginate(4);

        return view('organizacion.medidas',compact('medidas'));

    }
}
