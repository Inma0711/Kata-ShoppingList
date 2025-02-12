<?php

namespace Database\Factories;

use App\Models\Shopping_List;
use Illuminate\Database\Eloquent\Factories\Factory;

class Shopping_ListFactory extends Factory
{
    protected $model = Shopping_List::class;


    public function definition(): array
    {
        return [
            'article' => $this->faker->name(),
            'price' => $this->faker->randomNumber(),
        ];
    }
}
