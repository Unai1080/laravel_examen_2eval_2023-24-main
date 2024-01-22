<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
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
            'nombre' => $this->faker->company(),
            'direccion' => $this->faker->word(),
            'telefono' => random_int(610000000, 699999999),
            'email' => $this->faker->email(),
            'web' => $this->faker->word(),

            /*
            $table->string("nombre");
            $table->string("direccion");
            $table->int("telefono");
            $table->string("email");
            $table->string("web");
            */
        ];
    }
}
