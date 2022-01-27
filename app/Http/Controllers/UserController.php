<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $rols = Rol::all();
        if($users == NULL){
            return "No existen usuarios";
        }
        return view('register', [
            'users' => $users,
            'rols' => $rols,          
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
        $validarDatos = Validator::make($request->all(),
            [
                'name'=>'required|min:4|max:30|unique:users,name',
                'password' => [
                    'required',
                    'string',
                    'min:10',             // must be at least 10 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                ],
                'fecha_nacimiento'=>'required',
                'email'=>'required|max:30|unique:users,email',
                
            ],
            [
                'name.required'=>'Debes ingresar un nombre',
                'name.min'=>'El nombre debe ser de largo mínimo :min',
                'name.max'=>'El nombre debe ser de largo máximo :max',
                'password.required'=>'Debe ingresar una contraseña',
                'password.regex'=>'La contraseña debe cumplir el formato',
                'fecha_nacimiento.required'=>'Debe ingresar una fecha de nacimiento',
                'email.required'=>'Debe ingresar un correo electronico',
                'email.unique'=>'El correo electronico ya existe'
            ]
        );
        //validacion
        $validarDatos->validate();
            
        //creamos user
        $user=new User;
        $user->name = $request->name;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->password = $request->password;
        $user->email = $request->email;
        //id 1 ya que es un usuario
        $user->id_rol = 1;
        $user->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if($user == NULL){
            return "No existe el usuario";
        }
        return response()->json($user);
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
        $user = User::find($id);

        if($user == NULL){
            return "No existe el usuario ha eliminar";
        }
        $user->delete();

        return response()->json([
            "message"=>"Se elimino el usuario",
            "id"=>$user->id
        ]); 
    }
}
