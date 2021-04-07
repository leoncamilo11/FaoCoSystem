<?php

use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $tipoPagos=[
                      ['tipoPago'=>'Solicitud Pago'],
                      ['tipoPago'=>'Orden Compra/Servicio'],
                      ['tipoPago'=>'Mision Travel Claim'],
                      ['tipoPago'=>'DCA - Anticipo'],
                      ['tipoPago'=>'Anticipo General'],
                      ['tipoPago'=>'Servicios Públicos'],
                      ['tipoPago'=>'Field Payment Agent'],
                      ['tipoPago'=>'Factura General'],
                      ['tipoPago'=>'Caja Menor'],
                      ['tipoPago'=>'Viáticos'],
                      ['tipoPago'=>'Reembolso'],
                      ['tipoPago'=>'Reforestación'],
                      ['tipoPago'=>'Solicitud Viaje'],
                      ['tipoPago'=>'Cuenta Cobro'],
                      ['tipoPago'=>'Legalización Anticipos'],
                      ['tipoPago'=>'Honorarios']
                    ];
          foreach ($tipoPagos as $tipoPago) {
            DB::table('tipo_pagos')->insert([$tipoPago]);
          };
    }
}
