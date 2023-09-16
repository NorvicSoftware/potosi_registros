<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zona;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ViviendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'zona_id' => function () {
                    return Zona::factory()->create()->id;
                },
                'tamanio_m2' => fake()->numberBetween(50, 300),
                'habitaciones' => fake()->numberBetween(1, 5),
                'banios' => fake()->numberBetween(1, 3),
                'autos_parqueo' => fake()->numberBetween(0, 3),
                'costo_estimado' => fake()->numberBetween(50000, 500000),
            ];
    }
}
