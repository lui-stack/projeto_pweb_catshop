<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gatos>
 */
class GatosFactory extends Factory
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
            'raca'=>$this->faker->randomElement(['siames', 'persa', 'maine coon', 'rebaixado', 'radgoll']),
            'id_do_atendimento'=>$this->faker->numerify(100),



        ];
    }
}
