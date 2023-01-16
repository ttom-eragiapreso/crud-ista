<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games_data = json_decode(file_get_contents('https://api.sampleapis.com/switch/games'), true);

        foreach ($games_data as $game) {
            $new_game = new Game();

            $new_game->name = $game['name'];
            $new_game->slug = Game::generateSlug($game['name']);
            $new_game->genres = implode(', ', $game['genre']);
            $new_game->developers = implode(', ', $game['developers']);
            $new_game->publishers = implode(', ', $game['publishers']);
            $new_game->release = $game['releaseDates']['Europe'];

            $new_game->save();
        }
    }
}
