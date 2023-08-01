<?php

use Illuminate\Database\Seeder;

class CodigoArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $codigoArchivo =[
                ['codigoArchivo'=>'IL/1','detalles'=>'Documentos protocolarios expedidos por la Oficina de Programas,  invitaciones y/o adjuntos. Janeth González – Gloria Alvarado.'],
                ['codigoArchivo'=>'EX/6', 'detalles'=>'Solicitudes de Banco Occidente, monetizaciones, pagos de honorarios a Consultores. Luis Ramos.'],
                ['codigoArchivo'=>'LEG', 'detalles'=>'Respuestas jurídicas Notas Verbales  – Derechos de Petición – Quejas – Reclamos – MINISTERIO DE RELACIONES EXTERIORES. José Alvarez.'],
                ['codigoArchivo'=>'FAOR', 'detalles'=>'Diversas respuestas, solicitudes que competen directamente a la FAO.']
        ];

        foreach ($codigoArchivo as $codigoArchivo) {
          // code...
          DB::table('codigo_archivos')->insert([$codigoArchivo]);
        }
    }
}
