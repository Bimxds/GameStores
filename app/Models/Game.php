<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    use HasFactory;
    protected $fillable =[
        'category', 'name', 'description', 'description_long','price', 'cover', 'video', 'developer', 'publisher', 'is_adult',
    ];

    public function cart(){
        return $this->belongsTo(Cart::class, "game_id", "id");
    }
    public function detail(){
        return $this->belongsTo(TransactionDetail::class, "game_id", "id");
    }
}
