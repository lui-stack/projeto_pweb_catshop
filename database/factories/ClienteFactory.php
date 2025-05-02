<?php

namespace database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->name(),
            'cpf' => $this->faker->unique()->numerify("###########"),
            'idade' => $this->faker->numberBetween(18, 80),
            'endereco' => $this->faker->address(),
            'telefone' => $this->faker->numerify("#########"),
        ];
    }
}
