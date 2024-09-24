<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'game_id', 'rating', 'review'];

    // relazione tabella game
    public function game() {
        return $this->belongsTo(Game::class);
    }

    // relazione utente
    public function user() {
        return $this->belongsTo(User::class);
    }
}
