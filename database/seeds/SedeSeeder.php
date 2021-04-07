<?php

use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sedes=[
                ['sede'=>'Sede1', 'ciudad_id'=>'1', 'area_id'=>'1', 'entidad_id'=>'1', 'direccion'=>'Direccion1', 'detalles'=>'Detalles1'],
                ['sede'=>'Sede2', 'ciudad_id'=>'2', 'area_id'=>'2', 'entidad_id'=>'2', 'direccion'=>'Direccion2', 'detalles'=>'Detalles2'],
                ['sede'=>'Sede3', 'ciudad_id'=>'3', 'area_id'=>'3', 'entidad_id'=>'3', 'direccion'=>'Direccion3', 'detalles'=>'Detalles3'],
                ['sede'=>'Sede4', 'ciudad_id'=>'4', 'area_id'=>'4', 'entidad_id'=>'4', 'direccion'=>'Direccion4', 'detalles'=>'Detalles4'],
                ['sede'=>'Sede5', 'ciudad_id'=>'5', 'area_id'=>'5', 'entidad_id'=>'1', 'direccion'=>'Direccion5', 'detalles'=>'Detalles5']
        ];

        foreach ($sedes as $sede) {
          DB::table('sedes')->insert([$sede]);
        }
    }
}
