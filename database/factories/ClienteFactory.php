<?php

namespace Database\Factories;

use App\Models\Cliente;
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
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'edad' => $this->faker->randomElement([20,30,40,50,60,70]),
            'sexo' => $this->faker->randomElement(['Femenino','Masculino']),
        ];
    }
}
