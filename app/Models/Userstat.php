<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userstat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kills',
        'assists',
        'deaths',
        'times_mvp',
        'win_rate',
        'adr',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
