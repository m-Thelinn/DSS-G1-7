<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'short_name',
        'description',
        'picture',
        'country',
        'division',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function game() {
        return $this->hasOne(Game::class);
    }

    public function teamstat(){
        return $this->hasOne(Teamstat::class);
    }
}
