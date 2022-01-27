<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
         $rols = Rol::all();
         if($rols == NULL){
             return "No existen rols";
         }
         return response()->json($rols);
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
        $rol=new Rol;
        $rol->name = $request->name;
        $rol->save();
        return response()->json([
            "message"=>"Se a creado un nuevo rol",
            "id"=>$rol->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::find($id);
        if($rol == NULL){
            return "No existen rols con esa id";
        }
        return response()->json($rol);
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
        $rol= Rol::find($id);
        if($rol == NULL){
            return "No existe el rol que desea actualizar";
        }


        $rol->name = $request->name;
        $rol->save();
        return response()->json([
            "message"=>"Se actualizo el rol",
            "id"=>$rol->id
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::find($id);

        if($rol == NULL){
            return "No existe el rol que desea eliminar";
        }
        $rol->delete();

        return response()->json([
            "message"=>"Se elimino el rol",
            "id"=>$rol->id
        ]); 
    }
}
