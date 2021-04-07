<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $areas=[
                ['area'=>'Administrativa'],
                ['area'=>'Compras'],
                ['area'=>'Viajes'],
                ['area'=>'Tesoreria'],
                ['area'=>'Finanzas'],
                ['area'=>'Comunicaciones'],
                ['area'=>'Seguridad'],
                ['area'=>'Sistemas'],
                ['area'=>'Recursos Humanos'],
                ['area'=>'Proyectos']
        ];

        foreach ($areas as $area) {
          DB::table('areas')->insert([$area]);
        }
    }
}
