<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles =[
                ['role'=>'Administrador'],
                ['role'=>'Recepcionista'],
                ['role'=>'Tesoreria'],
                ['role'=>'Recursos Humanos'],
                ['role'=>'Autorizador Salidas'],
                ['role'=>'Consultor'],
                ['role'=>'Lider de Proyecto'],
                ['role'=>'Lider de Area'],
                ['role'=>'Administrativo'],
                ['role'=>'Financiero'],
                ['role'=>'Compras'],
                ['role'=>'Viajes'],
                ['role'=>'Finanzas'],
                ['role'=>'Comunicaciones'],
                ['role'=>'Seguridad'],
                ['role'=>'Sistemas'],
                ['role'=>'No aplica']
        ];

        foreach ($roles as $rol) {
          // code...
          DB::table('roles')->insert([$rol]);
        }

    }
}
