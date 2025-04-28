<?php

namespace database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->name(),
            'cpf' => $this->faker->unique()->cpf(),
            'idade' => $this->faker->numberBetween(18, 80),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->phoneNumber(),
        ];
    }
}
