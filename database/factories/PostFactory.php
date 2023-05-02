<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
        $posts = [
            [
                'title' => 'Netflix Adds Demon Slayer: Entertainment District Arc Anime',
                'body' => $this->faker->paragraph(30),
                'image' => 'https://www.animenewsnetwork.com/thumbnails/crop600x315gLB/cms/news.5/181607/demon-slayer-entertainment-district-arc-visual.jpg',
                'user_id' => User::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Netflix Adds Demon Slayer: Entertainment District Arc Anime',
                'body' => $this->faker->paragraph(30),
                'image' => 'https://www.animenewsnetwork.com/thumbnails/crop600x315gLB/cms/news.5/181607/demon-slayer-entertainment-district-arc-visual.jpg',
                'user_id' => User::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Netflix Adds Demon Slayer: Entertainment District Arc Anime',
                'body' => $this->faker->paragraph(30),
                'image' => 'https://www.animenewsnetwork.com/thumbnails/crop600x315gLB/cms/news.5/181607/demon-slayer-entertainment-district-arc-visual.jpg',
                'user_id' => User::inRandomOrder()->first()->id,
            ],
            [
                'title' => 'Netflix Adds Demon Slayer: Entertainment District Arc Anime',
                'body' => $this->faker->paragraph(30),
                'image' => 'https://www.animenewsnetwork.com/thumbnails/crop600x315gLB/cms/news.5/181607/demon-slayer-entertainment-district-arc-visual.jpg',
                'user_id' => User::inRandomOrder()->first()->id,
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(30),
            'image' => 'https://www.animenewsnetwork.com/thumbnails/crop600x315gLB/cms/news.5/181607/demon-slayer-entertainment-district-arc-visual.jpg',
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
