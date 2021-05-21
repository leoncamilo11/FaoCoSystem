<?php

use Illuminate\Database\Seeder;

class TesoreriaSeeder extends Seeder
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

        $arrayP = DB::table('proveedores')->select('id')->get();
        $arrayR = DB::table('users')->select('id')->get();
        $arrayTp = DB::table('tipo_pagos')->select('id')->get();
        $arrayPr = DB::table('proyectos')->select('id')->get();

        $valoresP = array();
        $valoresR = array();
        $valoresTp = array();
        $valoresPr = array();

        $numeroP = count($arrayP);
        $numeroR = count($arrayR);
        $numeroTp = count($arrayTp);
        $numeroPr = count($arrayPr);

        for ($i=0; $i < $numeroP; $i++) {
          // code...
          $valorP = $arrayP[$i]->id;
          $valoresP[$i]=$valorP;
        }
        for ($i=0; $i < $numeroR; $i++) {
          // code...
          $valorR = $arrayR[$i]->id;
          $valoresR[$i]=$valorR;
        }
        for ($i=0; $i < $numeroTp; $i++) {
          // code...
          $valorTp = $arrayTp[$i]->id;
          $valoresTp[$i]=$valorTp;
        }
        for ($i=0; $i < $numeroPr; $i++) {
          // code...
          $valorPr = $arrayPr[$i]->id;
          $valoresPr[$i]=$valorPr;
        }

        for ($i=0; $i < 10; $i++) {
          DB::table('tesorerias')->insert(array(
            'consecutivo' => $faker->randomDigit,
            'fechaFactura' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'proveedor_id' => $faker->randomElement($valoresP),
            'responsable_id' => $faker->randomElement($valoresR),
            'proyecto_id' => $faker->randomElement($valoresR),
            'tipoPago_id' => $faker->randomElement($valoresTp),
            'noFactura' => $faker->unique()->numberBetween($min = 10000, $max = 90000),
            'valorFactura' => $faker->numberBetween($min = 1000, $max = 90000),
            'valorIva' => $faker->numberBetween($min = 1000, $max = 9000),
            'valorImpoconsumo' => $faker->numberBetween($min = 1000, $max = 9000),
            'detalles'=>$faker->realText($maxNbChars = 200, $indexSize = 2))
          );
        }
    }
}
