<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Team;
use App\Models\User;


class TeamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEquipoJugadores(){

        $team = new Team();
        $team->id = 0;
        $team->nombre = 'G2';
        $team->abreviatura = 'G2';
        $team->descripcion = 'Equipo fundado por Carlos Rodriguez Ocelote';
        $team->foto = 'a';
        $team->pais = 'Spain';
        $team->division = 1;
        $team->save();

        $team2 = new Team();
        $team2->id = 2;
        $team2->nombre = 'G2';
        $team2->abreviatura = 'G2';
        $team2->descripcion = 'Equipo fundado por Carlos Rodriguez Ocelote';
        $team2->foto = 'a';
        $team2->pais = 'Spain';
        $team2->division = 1;
        $team2->save();

        $jugador1 = new User();
        $jugador1->id = 2;
        $jugador1->nick = 'Papo';
        $jugador1->nombre = 'Miguel';
        $jugador1->apellidos = 'Rodriguez';
        $jugador1->email = 'papo@gmail.com';
        $jugador1->password = 'abuela123';
        $jugador1->pais = 'Spain';
        $jugador1->twitter = 'Twitter';
        $jugador1->rol = 1;
        $jugador1->telefono = '999999999';
        $jugador1->is_admin = 0;
        $jugador1->team()->associate($team2);
        $jugador1->save();

        $this->assertEquals($jugador1, 2);

        $jugador1->delete();
        $team->delete();
    }
}
