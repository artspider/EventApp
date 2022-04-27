<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Evento;
use App\Models\Evento_Itialumno;
use App\Models\Itialumno;

class EventoItialumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventoItialumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'itialumno_id' => Itialumno::factory(),
            'evento_id' => Evento::factory(),
            'presentaciones' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
