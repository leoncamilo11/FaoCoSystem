<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
  $faker->addProvider(new \FakeProvider($faker));
    static $password;
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'tipoDocumento_id' => $faker->tipoDocumento_id,
        'documento' => $faker->randomElement([5462189,6431579,641979734,64979879,6436195,6431928,85762]),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $password ?: $password = bcrypt('secret'), // password
        'remember_token' => Str::random(10),
        'telefono' => $faker->phoneNumber,
        'entidade_id' => $faker->randomElement([1,2,3,4]),
        'proyecto_id' => $faker->randomElement([1,2,3,4]),
        'activo' => $faker->randomElement([1,2]),
    ];
});
