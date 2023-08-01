<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /*$this->truncateTables(['tipo_documentos','roles', 'tipo_pagos', 'estados', 'proveedores',
                              'paises', 'ciudades', 'areas', 'entidades', 'sedes', 'users', 'proyectos',
                              'correspondencias', 'tesorerias', 'proyecto_users', 'rol_users']);*/
        // $this->call(UserSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(TipoPagoSeeder::class);
        $this->call(EstadoSeeder::class);
        //$this->call(ProveedorSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(EntidadSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RolUserSeeder::class);
        $this->call(ProyectoSeeder::class);
        //$this->call(CorrespondenciaSeeder::class);
        //$this->call(TesoreriaSeeder::class);
        $this->call(ProyectoUserSeeder::class);
        $this->call(CodigoArchivoSeeder::class);
        $this->call(TipoCorrespondenciaSeeder::class);
    }

    /*protected function truncateTables(array $tablas) {
      DB::statement('set foreign_keys_checks = 0;');
      foreach ($tablas as $tabla) {
        DB:table($tabla)->truncate();
      }
      DB::statement('set foreign_keys_checks = 1;');
    }*/
}
