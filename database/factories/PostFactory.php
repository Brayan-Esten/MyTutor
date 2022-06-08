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
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'preview' => $this->faker->paragraph(1),
            // 'detail' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(2, 4))) . '</p>',
            'detail' => collect($this->faker->paragraphs(mt_rand(2, 4)))
                        ->map(fn ($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => $this->faker->numberBetween(1, 3),
            'category_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
