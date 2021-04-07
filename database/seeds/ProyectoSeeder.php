<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        //Se hace la consulta por medio del query builder de laravel con la restriccion por rol
        $arrayA = DB::table('rol_users')->select('user_id')->where('rol_id', '9')->get();
        $arrayF = DB::table('rol_users')->select('user_id')->where('rol_id', '10')->get();
        $arrayC = DB::table('rol_users')->select('user_id')->where('rol_id', '7')->get();
        //Se crea un array para lamacenar los ids que se van a asignar de forma aleatorio por cada rol
        $valoresA = array();
        $valoresF = array();
        $valoresC = array();
        //Se hace un conteno de los objetos que vienen en el array arrojado por el query builder
        $numeroA = count($arrayA);
        $numeroF = count($arrayF);
        $numeroC = count($arrayC);
        //Se hace un ciclo for para recorrer el resultado del query builder dependiente de la
        //cantidad de objetos que haya encontrado y se asignan a el array previamente creado
        for ($i=0; $i < $numeroA; $i++) {
          // code...
          $valorA = $arrayA[$i]->user_id;
          $valoresA[$i]=$valorA;
        }
        for ($i=0; $i < $numeroF; $i++) {
          // code...
          $valorF = $arrayF[$i]->user_id;
          $valoresF[$i]=$valorF;
        }
        for ($i=0; $i < $numeroC; $i++) {
          // code...
          $valorC = $arrayC[$i]->user_id;
          $valoresC[$i]=$valorC;
        }
        //dd($administrativo);
        //$ofinanciero = DB::table('rol_users')->select('user_id')->where('rol_id', '10')->get();
        //$ocoordinador = DB::table('rol_users')->select('user_id')->where('rol_id', '7')->get();

        //dd($numero);
        //[$keys, $values] = Arr::divide($array);



        //dd($valores);

        /*dowhile ($a>=$numero) {
          $administrativo = $array[$a]->user_id;
          $administrativos[$administrativo];
        };*/


        //dd($array[]->user_id);
        //dd($financiero);
        //dd($coordinador);

        //Llenado aleatorio de los campos para proyecto
        for ($i=0; $i < 10; $i++) {
          // code...
          DB::table('proyectos')->insert(array(
            'simbolo' => Str::random(5),
            'actividad' => Str::random(10),
            'administrativo_id' => $faker->randomElement($valoresA),
            'financiero_id' => $faker->randomElement($valoresF),
            'coordinador_id' => $faker->randomElement($valoresC),
            'activo' => $faker->randomElement([1,2]))
          );
        }
    }
}
