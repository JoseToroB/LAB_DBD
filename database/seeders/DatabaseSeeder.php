<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'name' => 'Usuario',
        ]);
        DB::table('rols')->insert([
            'name' => 'Admin',
        ]);
        //creados los roles

        //ahora creo 5 libros y 5 usuarios
        Libro::factory(5)->create();
        User::factory(5)->create();
        DB::table('users')->insert([
            'name'=> 'user',
            'email'=>'a@a.cl',
            'password'=>'a',
            'fecha_nacimiento'=>'01-01-2000',
            'id_rol'=>1,
        ]);
        DB::table('users')->insert([
            'name'=> 'adm',
            'email'=>'b@b.cl',
            'password'=>'b',
            'fecha_nacimiento'=>'01-01-2000',
            'id_rol'=>2,
        ]);
    }
}
