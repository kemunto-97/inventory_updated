<?php

namespace Database\Factories;

use App\Models\banks;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\banks>
 */
class banksFactory extends Factory
{
    protected $model = banks::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
        ];
    }
}
