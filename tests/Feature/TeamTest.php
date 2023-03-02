<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

use App\Models\User;
use App\Models\Game;
use App\Models\Team;


class TeamTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserTeam()
    {
        $faker = \Faker\Factory::create();

        $equipo = new Team();
        $equipo->name = 'G2 Esports';
        $equipo->short_name = 'G2';
        $equipo->description = 'Equipo formado por ...';
        $equipo->picture = 'picture';
        $equipo->country = 'Spain';
        $equipo->division = 1;
        $equipo->save();

        $usuario = new User();
        $usuario->name = 'Jesus';
        $usuario->email = 'jlg90@gmail.com';
        $usuario->password = '12345678';
        $usuario->lastname = 'Molines';
        $usuario->nickname = 'Papo56';
        $usuario->phone = '999999999';
        $usuario->country = 'Spain';
        $usuario->rol = 1;
        $usuario->is_admin = 1;
        $usuario->team()->associate($equipo);
        $usuario->save();

        $usuario2 = new User();
        $usuario2->name = 'Jesus';
        $usuario2->email = 'jlg91@gmail.com';
        $usuario2->password = '12345678';
        $usuario2->lastname = 'Molines';
        $usuario2->nickname = 'Papo57';
        $usuario2->phone = '999999999';
        $usuario2->country = 'Spain';
        $usuario2->rol = 1;
        $usuario2->is_admin = 1;
        $usuario2->team()->associate($equipo);
        $usuario2->save();

        $this->assertEquals($usuario->team_id, $equipo->id);
        $this->assertEquals($usuario2->team_id, $equipo->id);

        $this->assertEquals(User::first()->team->name,'G2 Esports');
        $this->assertEquals(User::first()->team->short_name,'G2');

        $this->assertEquals(Team::first()->users[0]->nickname,'Papo56');
        $this->assertEquals(Team::first()->users[1]->nickname,'Papo57');

        $usuario->delete();
        $usuario2->delete();
        $equipo->delete();
    }

    public function testGameTeam() {

        $faker = \Faker\Factory::create();

        $equipo = new Team();
        $equipo->name = 'G2 Esports';
        $equipo->short_name = 'G2';
        $equipo->description = 'Equipo formado por ...';
        $equipo->picture = 'picture';
        $equipo->country = 'Spain';
        $equipo->division = 1;
        $equipo->save();

        $equipo2 = new Team();
        $equipo2->name = 'Fnatic';
        $equipo2->short_name = 'FNC';
        $equipo2->description = 'Equipo formado por ...';
        $equipo2->picture = 'picture';
        $equipo2->country = 'Spain';
        $equipo2->division = 1;
        $equipo2->save();

        $usuario = new User();
        $usuario->name = 'Jesus';
        $usuario->email = 'jlg90@gmail.com';
        $usuario->password = '12345678';
        $usuario->lastname = 'Molines';
        $usuario->nickname = 'Papo56';
        $usuario->phone = '999999999';
        $usuario->country = 'Spain';
        $usuario->rol = 1;
        $usuario->is_admin = 1;
        $usuario->team()->associate($equipo);
        $usuario->save();

        $usuario2 = new User();
        $usuario2->name = 'Jesus';
        $usuario2->email = 'jlg91@gmail.com';
        $usuario2->password = '12345678';
        $usuario2->lastname = 'Molines';
        $usuario2->nickname = 'Papo57';
        $usuario2->phone = '999999999';
        $usuario2->country = 'Spain';
        $usuario2->rol = 1;
        $usuario2->is_admin = 1;
        $usuario2->team()->associate($equipo2);
        $usuario2->save();

        $game = new Game();
        $game->date = $faker->date;
        $game->time = $faker->time;
        $game->format = 1;        
        $game->result = 1;
        $game->local()->associate($equipo);
        $game->visitante()->associate($equipo2);
        $game->save();

        $this->assertEquals($game->local_id, $equipo->id);
        $this->assertEquals($game->visitante_id, $equipo2->id);

        $this->assertEquals(Game::first()->local->name,'G2 Esports');
        $this->assertEquals(Game::first()->visitante->name,'Fnatic');
        
        $usuario->delete();
        $usuario2->delete();
        $game->delete();
        $equipo->delete();
        $equipo2->delete();

    }

}
