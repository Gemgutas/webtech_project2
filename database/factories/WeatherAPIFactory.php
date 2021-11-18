<?php

namespace Database\Factories;

use App\Models\WeatherAPI;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeatherAPIFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WeatherAPI::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->word,
        'celsius' => $this->faker->word,
        'fahrenheit' => $this->faker->word,
        'longitude' => $this->faker->word,
        'latitude' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
