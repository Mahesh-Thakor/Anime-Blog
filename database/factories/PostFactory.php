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
                'title' => 'The Daily Life of the Immortal King 3 – A Boy and His Dog',
                'body' => 'The great Demon Empire has been brought to its knees. The Demon king was slain and his kingdom lay in ruins. Humans can finally rest easy, no longer daunted by the threat of Demon kind, right? Right??? You know what they say, you can’t keep a good demon down…or a bad one. Actually, this mostly applies to the bad ones. Having lost their home, demons are now steadily streaming into the human world as refugees and lost souls. It’s a bit of an adjustment for everyone. And they’re not great about keeping their paperwork in order. At least there are Demon hunters and necromancers to help keep them in line, but those guys might actually be worse. So, how’s Ling Wang supposed to just enjoy his perfectly average high school life and crunchy noodles in peace? Hopefully, he won’t destroy the world this time. No promises…
                This is now the third season of The Daily Life of the Immortal King that I have binged through. Spoilers for my own review to follow, I still really like it. I think letting some time pass between seasons is a good idea because he shows consistency might make it feel a bit redundant if watched all at once but otherwise, I have no complaints. Wo this is a really short review!',
                'image' => 'https://i0.wp.com/drunkenanimeblog.com/wp-content/uploads/2023/02/Immortla-King-Season-3.jpeg',
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
