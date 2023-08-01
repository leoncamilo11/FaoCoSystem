<?php

use Illuminate\Database\Seeder;

class TipoCorrespondenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoCorrespondencia =[
                ['tipoCorrespondencia'=>'Carta'],
                ['tipoCorrespondencia'=>'Memorando'],
                ['tipoCorrespondencia'=>'Circular'],
                ['tipoCorrespondencia'=>'Certificación'],
                ['tipoCorrespondencia'=>'Nota Verbal'],
                ['tipoCorrespondencia'=>'Solicitud de Viaje'],
                ['tipoCorrespondencia'=>'Cuenta de Cobro'],
                ['tipoCorrespondencia'=>'Pago'],
                ['tipoCorrespondencia'=>'Derecho de Petición'],
                ['tipoCorrespondencia'=>'Respuesta Legal']
        ];

        foreach ($tipoCorrespondencia as $tipoCorrespondencia) {
          // code...
          DB::table('tipo_correspondencias')->insert([$tipoCorrespondencia]);
        }
    }
}
