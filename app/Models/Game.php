<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'hora', 'formato', 'resultado', 'equipo_local', 'equipo_visitante',
    ];

    public function Team() {
        // Game tiene las claves ajenas equipo_local y equipo_visitante.
        return $this->hasOne(Team::class);
    }
}
