<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Game;
use App\Models\Team;


class TeamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEquipoUsuario()
    {
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
        $usuario2->rol = 2;
        $usuario2->is_admin = 0;
        $usuario2->team()->associate($equipo);
        $usuario2->save();

        $usuario3 = new User();
        $usuario3->name = 'Jesus';
        $usuario3->email = 'jlg92@gmail.com';
        $usuario3->password = '12345678';
        $usuario3->lastname = 'Molines';
        $usuario3->nickname = 'Papo58';
        $usuario3->phone = '999999999';
        $usuario3->country = 'Spain';
        $usuario3->rol = 3;
        $usuario3->is_admin = 0;
        $usuario3->team()->associate($equipo);
        $usuario3->save();
        

        $this->assertEquals(User::find(1)->name,'Jesus');
        $this->assertEquals(User::find(1)->team->name,'G2 Esports');

        $usuario->delete();
        $usuario2->delete();
        $usuario3->delete();
        $equipo->delete();
    }
}
