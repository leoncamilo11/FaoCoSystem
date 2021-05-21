<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
        static $password;

        DB::table('users')->insert(array(
          'nombre' => "admin",
          'apellido' => "admin",
          'index' => 0000000000,
          'tipoDocumento_id' => 7,
          'documento' => 00000000,
          'email' => "admin@admin.com",
          'email_verified_at' => now(),
          'password' => $password ?: $password = bcrypt('secret'), // password
          'remember_token' => Str::random(10),
          'telefono' => 000000,
          'entidad_id' => 5));

        /**for ($i=0; $i < 10; $i++) {
          DB::table('users')->insert(array(
            'nombre' => $faker->name,
            'apellido' => $faker->lastName,
            'index' => $faker->unique()->numberBetween($min = 1000000, $max = 2000000),
            'tipoDocumento_id' => $faker->randomElement([1,2,3,4,5,6]),
            'documento' => $faker->randomElement([5462189,6431579,641979734,64979879,6436195,6431928,85762]),
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => $password ?: $password = bcrypt('secret'), // password
            'remember_token' => Str::random(10),
            'telefono' => $faker->phoneNumber,
            'entidad_id' => $faker->randomElement([1,2,3,4]))
          );
        }*/


    }
}
