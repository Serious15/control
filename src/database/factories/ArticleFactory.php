<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory; //

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => $this->faker()->name(),
            'email' => $this->faker()->email(),
            'password' => $this->faker()->password(),
            'created_at' => $this->faker()->created_at(),
            'updated_at' => $this->faker()->updated_at(),
        ];
    }
}
