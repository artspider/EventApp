<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Presentator;

class PresentatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Presentator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'universidad' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'carrera' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'trabajo_actual' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'especialidad' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'web' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'temas' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'telefono' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'email' => $this->faker->safeEmail,
            'twitter' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'facebook' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'linkedin' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'foto' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
