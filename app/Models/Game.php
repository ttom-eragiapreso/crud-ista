<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'genres', 'developers', 'publishers', 'release'];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $game_exists = Game::where('slug', $slug)->first();
        while ($game_exists) {
            $slug = $original_slug . '-' . $c++;
            $game_exists = Game::where('slug', $slug)->first();
        }
        return $slug;
    }
}
