<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Funcionario;

class FuncionarioFactory extends Factory
{
    protected $model = Funcionario::class;

    public function definition(): array
    {
        $funcoes = ['Veterinário', 'Atendente', 'Tosador', 'Administrador'];

        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->unique()->numerify("###########"),
            'funcao' => $this->faker->randomElement($funcoes),
        ];
    }
}
