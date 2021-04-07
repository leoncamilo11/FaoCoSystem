<?php

use Illuminate\Database\Seeder;

class CorrespondenciaSeeder extends Seeder
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

        $arrayR = DB::table('rol_users')->select('user_id')->/*where('rol_id', '2')->*/get();
        $arrayU = DB::table('users')->select('id')->get();
        $arrayEs = DB::table('estados')->select('id')->get();
        $arrayC = DB::table('ciudades')->select('id')->get();
        //$arrayCr = DB::table('ciudades')->select('id')->get();
        $valoresR = array();
        $valoresU = array();
        $valoresEs = array();
        $valoresC = array();
        $numeroR = count($arrayR);
        $numeroU = count($arrayU);
        $numeroEs = count($arrayEs);
        $numeroC = count($arrayC);
        for ($i=0; $i < $numeroR; $i++) {
          // code...
          $valorR = $arrayR[$i]->user_id;
          $valoresR[$i]=$valorR;
        }
        for ($i=0; $i < $numeroU; $i++) {
          // code...
          $valorU = $arrayU[$i]->id;
          $valoresU[$i]=$valorU;
        }
        for ($i=0; $i < $numeroEs; $i++) {
          // code...
          $valorEs = $arrayEs[$i]->id;
          $valoresEs[$i]=$valorEs;
        }
        for ($i=0; $i < $numeroC; $i++) {
          // code...
          $valorC = $arrayC[$i]->id;
          $valoresC[$i]=$valorC;
        }

        for ($i=0; $i < 10; $i++) {
          DB::table('correspondencias')->insert(array(
            'consecutivo' => $faker->randomDigit,
            'recepcionistaRegistra_id' => $faker->randomElement($valoresR),
            'numeroGuia' => Str::random(10),
            'remitenteE' => $faker->company,
            'remitenteC_id' => null,
            'remitenteP_id' => null,
            'detalles' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'ciudadE_id' => $faker->randomElement($valoresC),
            'ciudadR_id' => $faker->randomElement($valoresC),
            'estado_id' => $faker->randomElement($valoresEs),
            'usuarioRecibe_id' => $faker->randomElement($valoresU))
          );
        }
    }
}
