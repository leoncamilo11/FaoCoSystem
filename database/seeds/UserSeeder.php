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

        for ($i=0; $i < 10; $i++) {
          DB::table('users')->insert(array(
            'nombre' => $faker->name,
            'apellido' => $faker->lastName,
            'tipoDocumento_id' => $faker->randomElement([1,2,3,4,5,6]),
            'documento' => $faker->randomElement([5462189,6431579,641979734,64979879,6436195,6431928,85762]),
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => $password ?: $password = bcrypt('secret'), // password
            'remember_token' => Str::random(10),
            'telefono' => $faker->phoneNumber,
            'entidad_id' => $faker->randomElement([1,2,3,4]))
          );
        }


    }
}
