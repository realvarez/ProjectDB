<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use View;
class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      return view('prueba');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function myform()
    {
        $regiones = DB::table('regions')->pluck("nombre","id")->all();
        return view('prueba',compact('regiones'));
    }

    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $comunas = DB::table('comunas')->where('region_id',$request->region_id)->pluck("nombre","id")->all();
            $data = view('ajax-select',compact('comunas'))->render();
            return response()->json(['options'=>$data]);
        }
    }
    public function test(Request $request)
    {
        $region_id = $request->get('region_id');
        $comuna_id = $request->get('comuna_id');
        echo "<p>ID de region: </p>".$region_id."<p> ID de comuna: </p>".$comuna_id;
        
    }
}
