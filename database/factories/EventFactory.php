<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'descripcion' => $this->faker->text,
            'presentaciones' => $this->faker->numberBetween(-1000, 1000),
            'min_certificar' => $this->faker->numberBetween(-1000, 1000),
            'precio' => $this->faker->randomFloat(2, 0, 999999.99),
            'fecha_inicio' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'fecha_cierre' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'asistencia' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->boolean,
        ];
    }
}
