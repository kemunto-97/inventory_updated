<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\orders;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\orders>
 */
class ordersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */
    protected $model = orders::class;

    protected function withFaker()
{
   return \Faker\Factory::create('en');
}
    public function definition()
    {
        return [
            'user_id' => orders::factory(),
            'product_name' => $this->faker->firstname(),
            'product_price' => 1000,
            'product_id' => 1,
            'date' => $this->faker->unixTime(),
        ];
    }
}
