<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Itialumn;

class ItialumnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Itialumn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numcontrol' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'paterno' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'materno' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'nombre' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'carrera' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'semestre' => $this->faker->numberBetween(-1000, 1000),
            'curp' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'email' => $this->faker->safeEmail,
            'foto' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
