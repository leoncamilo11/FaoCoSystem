<?php

use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        for ($i=0; $i < 5; $i++) {
          // code...
          DB::table('proveedores')->insert(array(
            'nombre' => $faker->name,
            'tipoDocumento_id' => 1,
            'documento' => $faker->randomElement([5462189,6431579,641979734,64979879,6436195,6431928,85762]),
            'noChequeo' => 0,
            'supplier' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
            'activo' => $faker->randomElement([1,2]))
          );
        }

        for ($i=0; $i < 5; $i++) {
          // code...
          DB::table('proveedores')->insert(array(
            'nombre' => $faker->name,
            'tipoDocumento_id' => 6,
            'documento' => $faker->randomElement([5462189,6431579,641979734,64979879,6436195,6431928,85762]),
            'noChequeo' => $faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'supplier' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
            'activo' => $faker->randomElement([1,2]))
          );
        }
    }
}
