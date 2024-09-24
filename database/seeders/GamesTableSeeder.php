<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'Open-world action-adventure game where Link explores the kingdom of Hyrule.',
                'image' => 'https://example.com/zelda_breath_of_the_wild_cover.jpg',
                'console' => 'Nintendo Switch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'God of War',
                'description' => 'An epic action game set in Norse mythology, following the journey of Kratos and his son Atreus.',
                'image' => 'https://example.com/god_of_war_cover.jpg',
                'console' => 'PlayStation 4, PlayStation 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Halo Infinite',
                'description' => 'First-person shooter that follows the story of Master Chief in the Halo universe.',
                'image' => 'https://example.com/halo_infinite_cover.jpg',
                'console' => 'Xbox One, Xbox Series X|S, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'description' => 'A Western-themed open-world game developed by Rockstar, following the story of Arthur Morgan.',
                'image' => 'https://example.com/red_dead_redemption_2_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Mario Odyssey',
                'description' => 'A 3D platformer where Mario embarks on a journey across various worlds to rescue Princess Peach.',
                'image' => 'https://example.com/super_mario_odyssey_cover.jpg',
                'console' => 'Nintendo Switch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'description' => 'An open-world RPG following the story of Geralt of Rivia as he hunts monsters and searches for his adopted daughter.',
                'image' => 'https://example.com/the_witcher_3_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, Nintendo Switch, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cyberpunk 2077',
                'description' => 'A futuristic open-world RPG set in Night City, where you play as V, a mercenary trying to survive.',
                'image' => 'https://example.com/cyberpunk_2077_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Animal Crossing: New Horizons',
                'description' => 'Life simulation game where you develop your own island, make friends with animal villagers, and decorate your home.',
                'image' => 'https://example.com/animal_crossing_cover.jpg',
                'console' => 'Nintendo Switch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fortnite',
                'description' => 'A battle royale game where 100 players fight to be the last person standing on a shrinking map.',
                'image' => 'https://example.com/fortnite_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, Nintendo Switch, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Call of Duty: Warzone',
                'description' => 'A free-to-play battle royale game set in the Call of Duty universe with modern weapons and tactical gameplay.',
                'image' => 'https://example.com/warzone_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FIFA 21',
                'description' => 'The latest installment in the FIFA series, featuring improved gameplay and real-world teams and players.',
                'image' => 'https://example.com/fifa_21_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NBA 2K21',
                'description' => 'A basketball simulation game with realistic gameplay and a comprehensive career mode.',
                'image' => 'https://example.com/nba_2k21_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apex Legends',
                'description' => 'A fast-paced battle royale where teams of three compete to be the last team standing, featuring unique characters.',
                'image' => 'https://example.com/apex_legends_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ghost of Tsushima',
                'description' => 'An open-world action game set in feudal Japan, where you play as a samurai trying to defend your land.',
                'image' => 'https://example.com/ghost_of_tsushima_cover.jpg',
                'console' => 'PlayStation 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resident Evil Village',
                'description' => 'A survival horror game that continues the story of Ethan Winters as he faces new horrors in a mysterious village.',
                'image' => 'https://example.com/resident_evil_village_cover.jpg',
                'console' => 'PlayStation 5, Xbox Series X|S, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Doom Eternal',
                'description' => 'A fast-paced first-person shooter where you battle demons across different dimensions.',
                'image' => 'https://example.com/doom_eternal_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hades',
                'description' => 'A rogue-like dungeon crawler where you play as Zagreus, trying to escape from the Underworld.',
                'image' => 'https://example.com/hades_cover.jpg',
                'console' => 'Nintendo Switch, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Assassin\'s Creed Valhalla',
                'description' => 'An action-RPG where you play as Eivor, a Viking leader exploring and conquering England in the 9th century.',
                'image' => 'https://example.com/assassins_creed_valhalla_cover.jpg',
                'console' => 'PlayStation 5, PlayStation 4, Xbox Series X|S, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fall Guys: Ultimate Knockout',
                'description' => 'A party game where players compete in mini-games to be the last one standing.',
                'image' => 'https://example.com/fall_guys_cover.jpg',
                'console' => 'PlayStation 4, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Among Us',
                'description' => 'A multiplayer game where players work together on a spaceship, but some players are impostors trying to sabotage the mission.',
                'image' => 'https://example.com/among_us_cover.jpg',
                'console' => 'PC, Mobile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Genshin Impact',
                'description' => 'An open-world action RPG where you explore the fantasy world of Teyvat, using different elemental abilities.',
                'image' => 'https://example.com/genshin_impact_cover.jpg',
                'console' => 'PlayStation 4, PC, Mobile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hollow Knight',
                'description' => 'A 2D action-adventure game where you explore an ancient, ruined kingdom full of insects and secrets.',
                'image' => 'https://example.com/hollow_knight_cover.jpg',
                'console' => 'Nintendo Switch, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sekiro: Shadows Die Twice',
                'description' => 'A challenging action game set in a reimagined late 1500s Japan, where you play as a shinobi seeking revenge.',
                'image' => 'https://example.com/sekiro_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Overwatch',
                'description' => 'A team-based multiplayer first-person shooter where players pick heroes with unique abilities to complete objectives.',
                'image' => 'https://example.com/overwatch_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, Nintendo Switch, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mortal Kombat 11',
                'description' => 'A fighting game with a large roster of characters, featuring brutal combat and detailed story modes.',
                'image' => 'https://example.com/mortal_kombat_11_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Borderlands 3',
                'description' => 'A first-person shooter RPG set in a futuristic world, featuring lots of loot, crazy characters, and over-the-top action.',
                'image' => 'https://example.com/borderlands_3_cover.jpg',
                'console' => 'PlayStation 4, Xbox One, PC',
                'created_at' => now(),
            ]
               
        ];

        foreach ($games as $game) {
            $newGame = new Game();
            $newGame->fill($game);
            $newGame->save();
        }
    }
}
