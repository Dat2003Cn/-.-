<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'gender'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
