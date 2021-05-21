<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estados=[
                ['estado'=>'Pendiente Envio'],
                ['estado'=>'Enviado'],
                ['estado'=>'Pendiente Recibido'],
                ['estado'=>'Recibido'],
                ['estado'=>'Entregado'],
                ['estado'=>'No Aplica']
        ];

        foreach ($estados as $estado) {
          DB::table('estados')->insert([$estado]);
        }
    }
}
