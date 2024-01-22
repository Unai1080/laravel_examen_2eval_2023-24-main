<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nif' => random_int(11111111, 99999999) . chr(rand(65,90)),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'fechanacimiento' => Carbon::today()->subYears(rand(16, 25)),
            'direccion' => $this->faker->word(),
            'telefono' => random_int(610000000, 699999999),
            'email' => $this->faker->email(),
            'vehiculo' => $this->faker->boolean(),

            /*
            $table->string("nif");
            $table->string("nombre");
            $table->string("apellido");
            $table->date("fechanacimiento");
            $table->string("direccion");
            $table->integer("telefono");
            $table->string("email");
            $table->boolean("vehiculo");
            */
        ];
    }
}
