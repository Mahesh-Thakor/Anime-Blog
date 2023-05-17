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
                        'title' => 'The daily life of the immortal king',
                        'body' => 'Release Year: 2020

                        Genre: Action Adventure Comedy Fantasy Supernatural Xianxia
                        
                        Studio: bilibili
                        
                        Where To Watch: Crunchyroll
                        
                        Why It Rocks: Having defeated a powerful demon at the age of six, precocious wizard Wang Ling must now navigate high school as an ordinary teenager.',
                        'image' => 'https://e0.pxfuel.com/wallpapers/414/808/desktop-wallpaper-the-daily-life-of-the-immortal-king-daily-king-life-immortal.jpg',
                        'user_id' => User::inRandomOrder()->first()->id,
                    ],
                    [
                        'title' => 'Mob Psycho 100',
                        'body' => 'Release Year: 2016

                        Genre: Action, Supernatural
                        
                        Studio: Bones
                        
                        Where To Watch: Crunchyroll
                        
                        Why It Rocks: Mob Psycho 100 has consistently delivered viewers an undeniably catchy trio of opening theme songs, a dazzling display of fluid action sequences, and an emotionally rich and satisfying coming-of-age-story with its main character, Shigeo “Mob” Kageyama. Mob Psycho 100’s story is a beautifully mature yet bizarrely comedic tale that only an anime can articulate. All of this earns it the title of anime of the decade.',
                        'image' => 'https://images.alphacoders.com/998/thumb-1920-998446.jpg',
                        'user_id' => User::inRandomOrder()->first()->id,
                    ],
                    [
                        'title' => 'Attack on Titan',
                        'body' => 'Release Year: 2013

                        Genre: Action, Drama, Sci-Fi
                        
                        Studio: Wit Studio, Mappa
                        
                        Where To Watch: Crunchyroll, Hulu, Netflix
                        
                        Why It Rocks: Attack on Titan might be overstaying its welcome with how many parts its final season is getting, but that won’t stop anime fans from pulling up a chair and asking its protag Eren Yeager to stay little while longer. To summarize AoT as it is now would be tricky both in terms of its subtext and the many intricate twists and turns in its final arc. But originally, the anime was about a group of child soldiers battling against kaiju-sized human beings.',
                        'image' => 'https://wallpaperaccess.com/full/36626.jpg',
                        'user_id' => User::inRandomOrder()->first()->id,
                    ],
                    [
                        'title' => 'Cyberpunk: Edgerunners',
                        'body' => 'Release Year: 2022

                        Genre: Action, Sci-Fi
                        
                        Studio: Trigger
                        
                        Where To Watch: Netflix
                        
                        Why It Rocks: Cyberpunk: Edgeruners not only single-handedly revived the popularity of its troubled video game, it stands as one of the best anime Trigger has ever made. Edgerunners is film noir anime storytelling at its finest. Edgerunnners follows David Martinez, a street kid who comes into possession of a military-grade cybernetic enhancement. After the death of his mother, David joins a gang of cyberpunks and becomes a legend in Night City for his storied heists and escapades. The show’s made even more fucking spectacular because it doesn’t overstay its welcome and reaches its emotional climax within its ten episodes.',
                        'image' => 'https://c4.wallpaperflare.com/wallpaper/293/1013/173/cyberpunk-edgerunners-lucy-edgerunners-cyberpunk-hd-wallpaper-preview.jpg',
                        'user_id' => User::inRandomOrder()->first()->id,
                    ],
                    [
                        'title' => 'Haikyu!!',
                        'body' => 'Release Year: 2014

                        Genre: Sports
                        
                        Studio: Production I.G
                        
                        Where To Watch: Crunchyroll
                        
                        Why It Rocks: Haikyu!! is, and I say this without being hyperbolic, the Fullmetal Alchemist of the sports anime genre. For the uninitiated, I basically just said Haikyu!! is the best sports anime, and I mean that. Haikyu!! follows the journey of Shouyou Hinata, a short-stack high schooler as he battles to become a professional volleyball player. Throughout the show, Hinata and his teammates learn to get over their egos and become Karasuno High School’s best volleyball team. Watching Haikyu!! will leave you on the edge of your seat at the clutch saves and competitive spirit of its titular characters. Hell, it might even convince you to take up the sport yourself.',
                        'image' => 'https://wallpaperaccess.com/full/382578.jpg',
                        'user_id' => User::inRandomOrder()->first()->id,
                    ],
                    [
                        'title' => 'Vinland Saga',
                        'body' => 'Why It Rocks: Chances are if you enjoyed Robert Eggers’ The Northman, you’ll love Vinland Saga. The anime follows Thorfinn, a Viking child who, upon the murder of his father, joins the band of Vikings behind his father’s killing to exact his revenge on their leader, Askeladd. Thorfinn’s plan isn’t a secret among the band of sell swords because the lad routinely achieves impossible tasks simply to earn the right to duel Askeladd. The show rocks, and its manga is the best piece of fiction I’ve read to date, so be sure to check it out.',
                        'image' => 'https://wallpaperaccess.com/full/1408569.jpg',
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
