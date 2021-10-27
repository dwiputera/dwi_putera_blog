<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => $this->faker->paragraph(mt_rand(5, 10)),
            // ini belom ada tag <p>nya
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function($p) {
            //     return "<p>$p</p>";
            // }->implode('')),
            // ini function jadul
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            ->map(fn($p) =>"<p>$p</p>")
            ->implode(''),
            // ini function baru (arrrow function)
            // function jadul & baru sama aja gaada bedanya
            'user_id' => mt_rand(1, 10),
            'category_id' => mt_rand(1, 3)
            // mt_rand untuk random antara parameter1 dan parameter2
        ];
    }
}
