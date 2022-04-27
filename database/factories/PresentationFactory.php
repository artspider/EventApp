<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\Presentation;
use App\Models\Presentator;

class PresentationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Presentation::class;

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
            'duracion' => $this->faker->numberBetween(-1000, 1000),
            'fecha' => $this->faker->text,
            'hora' => $this->faker->text,
            'asistencia' => $this->faker->numberBetween(-10000, 10000),
            'calificacion' => $this->faker->numberBetween(-1000, 1000),
            'presentator_id' => Presentator::factory(),
            'event_id' => Event::factory(),
        ];
    }
}
