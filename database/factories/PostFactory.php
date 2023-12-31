<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'author' => $this->faker->name,
            'category' => $this->faker->randomElement(['html', 'css', 'php', 'js', 'mysql']),
            'level' => $this->faker->randomElement(['mudah','menengah']),
            'tool' => $this->faker->text(5),
            'id_yt' => $this->faker->text(5),
            'content' => $this->faker->text(255)
        ];
    }
}
