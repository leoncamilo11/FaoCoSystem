<?php

use Illuminate\Database\Seeder;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $entidades=[
                ['entidad'=>'FAO', 'direccion'=>'direccion 1', 'detalles'=>'detalles 1'],
                ['entidad'=>'Corprogreso', 'direccion'=>'direccion 2', 'detalles'=>'detalles 2'],
                ['entidad'=>'Agencia Nacional De Tierras', 'direccion'=>'direccion 3', 'detalles'=>'detalles 3'],
                ['entidad'=>'Centro Aseo', 'direccion'=>'direccion 4', 'detalles'=>'detalles 4'],
                ['entidad'=>'No Aplica', 'direccion'=>'No Aplica', 'detalles'=>'No Aplica']
        ];

        foreach ($entidades as $entidad) {
          DB::table('entidades')->insert([$entidad]);
        }
    }
}
