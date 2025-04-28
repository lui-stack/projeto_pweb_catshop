<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class GatosFactory extends Factory
{

    public function definition(): array
    {
        $racas = ['Siamês', 'Persa', 'Maine Coon', 'Bengal', 'Sphynx'];

        return [
            'nome' => $this->faker->firstName(),
            'raca' => $this->faker->randomElement($racas),
            'cliente_id' => Cliente::factory(),
        ];
    }
}
