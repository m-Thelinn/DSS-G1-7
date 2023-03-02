<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'time',
        'format',
        'result',
    ];

    public function local() {
        return $this->belongsTo(Team::class);
    }

    public function visitante() {
        return $this->belongsTo(Team::class);
    }
}
