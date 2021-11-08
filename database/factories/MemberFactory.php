<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'division_id' => mt_rand(1, 7),
            // 'name' => $this->faker->name(),
            // 'slug' => $this->faker->slug(),
            // 'class' => $this->faker->numerify('PPA-##'),
            // 'status' => $this->faker->word()
        ];
    }
}
