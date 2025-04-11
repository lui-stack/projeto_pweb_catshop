<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
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
            'funcao'=> $this->faker->randomElement(['Administrador', 'Vendedor', 'Banhista e tosador', 'Médico veterinário', 'Gerente de loja']),
        ];
    }
}
