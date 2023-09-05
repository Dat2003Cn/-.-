<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'gender'=>$this->faker->name(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
        ];
    }
}
