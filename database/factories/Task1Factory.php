<?php

namespace Database\Factories;

use App\Models\Task1;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;

class Task1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task1::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'title' => $this->faker->text,
            'body' => $this->faker->text,
           
        ];
    }
}
 