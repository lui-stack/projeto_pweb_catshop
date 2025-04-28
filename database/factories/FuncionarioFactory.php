<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{

    public function definition(): array
    {
        $funcoes = ['Veterinário', 'Atendente', 'Tosador', 'Administrador'];

        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->unique()->cpf(),
            'funcao' => $this->faker->randomElement($funcoes),
        ];
    }
}
