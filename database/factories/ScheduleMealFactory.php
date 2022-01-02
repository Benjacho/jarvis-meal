<?php

namespace Database\Factories;

use App\Models\ScheduleMeal;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleMealFactory extends Factory
{
    protected $model = ScheduleMeal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'hour' => $this->faker->time(),
        ];
    }
}
