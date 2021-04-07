<?php

use Illuminate\Database\Seeder;

class RolUserSeeder extends Seeder
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

        $arrayR = DB::table('roles')->select('id')->get();
        $arrayU = DB::table('users')->select('id')->get();

        $valoresR = array();
        $valoresU = array();

        $numeroR = count($arrayR);
        $numeroU = count($arrayU);

        for ($i=0; $i < $numeroR; $i++) {
          // code...
          $valorR = $arrayR[$i]->id;
          $valoresR[$i]=$valorR;
        }
        for ($i=0; $i < $numeroU; $i++) {
          // code...
          $valorU = $arrayU[$i]->id;
          $valoresU[$i]=$valorU;
        }

        for ($i=0; $i < 70; $i++) {
          DB::table('rol_users')->insert(array(
            'rol_id' => $faker->randomElement($valoresR),
            'user_id' => $faker->randomElement($valoresU),
            'activo' => $faker->randomElement([1,2]))
          );
        }
    }
}
