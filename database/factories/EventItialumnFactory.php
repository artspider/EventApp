<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Models\Event_Itialumn;
use App\Models\Itialumn;

class EventItialumnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventItialumn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'itialumn_id' => Itialumn::factory(),
            'event_id' => Event::factory(),
            'presentaciones' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
