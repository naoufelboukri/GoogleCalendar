<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name, 
            'start' => $this->faker->dateTimeAD('now' , null),
            'end' => $this->faker->dateTimeAD('now' , null),
            'description' => $this->faker->sentence,
            'all_day' => $this->faker->boolean(20) ,
            'created_at' => now()
        ];
    }
}
