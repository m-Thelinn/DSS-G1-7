<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teamstat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'wins',
        'losses',
        'ranking_position',
        'win_rate',
        'lose_rate',
        'team_id',
    ];

    

    public function team() {
        return $this->belongsTo(Team::class);
    }
}
