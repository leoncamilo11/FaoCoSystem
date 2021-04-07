<?php

use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoDocumentos=[
                ['codigo'=>'CC', 'tipoDocumento'=>'Cedula de Ciudadania'],
                ['codigo'=>'CE', 'tipoDocumento'=>'Cedula de Extrajeria'],
                ['codigo'=>'PA', 'tipoDocumento'=>'Pasaporte'],
                ['codigo'=>'RC', 'tipoDocumento'=>'Registro Civil'],
                ['codigo'=>'TI', 'tipoDocumento'=>'Tarjeta de Identidad'],
                ['codigo'=>'NIT', 'tipoDocumento'=>'Número de Identificación Tributaria']
        ];

        foreach ($tipoDocumentos as $tipoDocumento) {
          DB::table('tipo_documentos')->insert([$tipoDocumento]);
        }
    }
}
