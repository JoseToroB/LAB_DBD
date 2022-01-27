<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Validator;
class LibroController extends Controller
{
    public function vistaLibro($libro)
    {
        $selected = Libro::findOrFail($libro);
        

        return view('vistaLibro',[
            'libro' => $selected,
            
        ]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();
        if($libros == NULL){
            return "No existen libro";
        }
        return view('home', [
            'libros' => $libros,
        ]);
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
        $librosibro = new Libro;
        $librosibro->nombre = $request->nombre;
        $librosibro->autor = $request->autor;
        $librosibro->link = $request->link;
        $librosibro->fecha_publicacion = $request->fecha_publicacion;
        $librosibro->save();
        return redirect('/Home');
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
        $librosibro = Libro::find($id);
        if($librosibro == NULL){
            return "No existen libro con esa id";
        }
        return response()->json($librosibro);
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
        $librosibro = Libro::find($id);

        if($librosibro == NULL){
            return "No existe el libro a eliminar";
        }
        $librosibro->delete();

        return response()->json([
            "message"=>"Se elimino el libro",
            "id"=>$librosibro->id
        ]); 
    }
}
