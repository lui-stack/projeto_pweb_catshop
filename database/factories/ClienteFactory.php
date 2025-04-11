<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nome'=>$this->faker->name,
            'cpf'=>$this->faker->numerify(100),
            'idade'=> $this->faker-> numerify(100),
            'endereco'=>$this->faker->randomElement(['Estrangeiro', 'Nativo brasileiro']),
            'telefone'=>$this->faker->numerify(100),
        ];
    }
}
