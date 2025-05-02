<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gatos;

class GatosFactory extends Factory
{
    protected $model = Gatos::class;

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
