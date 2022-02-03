<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public function history(){
        return $this->belongsTo(TransactionHistory::class, "transaction_id", "id");
    }
    public function game(){
        return $this->hasMany(Game::class, "id", "game_id");
    }
}
