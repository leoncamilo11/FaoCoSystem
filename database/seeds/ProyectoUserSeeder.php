<?php

use Illuminate\Database\Seeder;

class ProyectoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**$faker = Faker\Factory::create();

        $arrayP = DB::table('proyectos')->select('id')->get();
        $arrayU = DB::table('users')->select('id')->get();

        $valoresP = array();
        $valoresU = array();

        $numeroP = count($arrayP);
        $numeroU = count($arrayU);

        for ($i=0; $i < $numeroP; $i++) {
          // code...
          $valorP = $arrayP[$i]->id;
          $valoresP[$i]=$valorP;
        }
        for ($i=0; $i < $numeroU; $i++) {
          // code...
          $valorU = $arrayU[$i]->id;
          $valoresU[$i]=$valorU;
        }

        for ($i=0; $i < 50; $i++) {
          DB::table('proyecto_users')->insert(array(
            'proyecto_id' => $faker->randomElement($valoresP),
            'user_id' => $faker->randomElement($valoresU))
          );
        }*/
    }
}
