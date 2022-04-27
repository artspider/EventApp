<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Itialumno;
use App\Models\Itialumno_Presentacion;
use App\Models\Presentacion;

class ItialumnoPresentacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItialumnoPresentacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'itialumno_id' => Itialumno::factory(),
            'presentacion_id' => Presentacion::factory(),
        ];
    }
}
