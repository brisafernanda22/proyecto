<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'producto' => $this->faker->sentence(),
            'cantidad' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'precio' => $this->faker->randomElement(['10','20','50','100','500','900','1000','5000']),
            'marca' => $this->faker->sentence(),

        ];
    }
}
