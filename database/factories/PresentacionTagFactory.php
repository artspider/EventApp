<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Presentacion;
use App\Models\Presentacion_Tag;
use App\Models\Tag;

class PresentacionTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PresentacionTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_id' => Tag::factory(),
            'presentacion_id' => Presentacion::factory(),
        ];
    }
}
