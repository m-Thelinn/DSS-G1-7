<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class Userstat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userstats')->delete();
        DB::table('userstats')->insert([
            [
            //ADMIN
            'kills' => 0,
            'assists' => 0,
            'deaths' => 0,
            'times_mvp' => 0,
            'win_rate' => 0,
            'adr'=> 0,
            'user_id' => DB::table('users')->where('nickname','admin')->first()->id,
            ],

            [
            //USUARIOS FNATIC
            //JUGADOR1
            'kills' => 1247,
            'assists' => 504,
            'deaths' => 854,
            'times_mvp' => 16,
            'win_rate' => 76,
            'adr'=> 150.5,
            'user_id' => DB::table('users')->where('nickname','Leo')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 1863,
            'assists' => 846,
            'deaths' => 1493,
            'times_mvp' => 21,
            'win_rate' => 77,
            'adr'=> 138.6,
            'user_id' => DB::table('users')->where('nickname','Chronicle')->first()->id,
            ],
            [
            
            //JUGADOR3
            'kills' => 2949,
            'assists' => 547,
            'deaths' => 2341,
            'times_mvp' => 44,
            'win_rate' => 70,
            'adr'=> 163.7,
            'user_id' => DB::table('users')->where('nickname','Derke')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 957,
            'assists' => 668,
            'deaths' => 977,
            'times_mvp' => 11,
            'win_rate' => 67,
            'adr'=> 112.8,
            'user_id' => DB::table('users')->where('nickname','Boaster')->first()->id,
            ],
            [
        
            //JUGADOR5
            'kills' => 1332,
            'assists' => 269,
            'deaths' => 1009,
            'times_mvp' => 23,
            'win_rate' => 77,
            'adr'=> 158.5,
            'user_id' => DB::table('users')->where('nickname','Alfajer')->first()->id,
            ],
            [
            //USUARIOS 100T
            //JUGADOR1
            'kills' => 1643,
            'assists' => 804,
            'deaths' => 1587,
            'times_mvp' => 28,
            'win_rate' => 74,
            'adr'=> 193.2,
            'user_id' => DB::table('users')->where('nickname','stellar')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 1641,
            'assists' => 1166,
            'deaths' => 1523,
            'times_mvp' => 11,
            'win_rate' => 75,
            'adr'=> 128.6,
            'user_id' => DB::table('users')->where('nickname','bang')->first()->id,
            ],
            [
            //JUGADOR3
            'kills' => 2872,
            'assists' => 1267,
            'deaths' => 2336,
            'times_mvp' => 9,
            'win_rate' => 76,
            'adr'=> 139.0,
            'user_id' => DB::table('users')->where('nickname','Cryocells')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 3659,
            'assists' => 1844,
            'deaths' => 561,
            'times_mvp' => 33,
            'win_rate' => 69,
            'adr'=> 142.1,
            'user_id' => DB::table('users')->where('nickname','Derrek')->first()->id,
            ],
            [
            //JUGADOR5
            'kills' => 2160,
            'assists' => 711,
            'deaths' => 1947,
            'times_mvp' => 22,
            'win_rate' => 63,
            'adr'=> 169.1,
            'user_id' => DB::table('users')->where('nickname','Asuna')->first()->id,
            ],
            [
            //USUARIOS KOI
            //JUGADOR1
            'kills' => 2654,
            'assists' => 1572,
            'deaths' => 2571,
            'times_mvp' => 10,
            'win_rate' => 75,
            'adr'=> 198.1,
            'user_id' => DB::table('users')->where('nickname','koldamenta')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 1243,
            'assists' => 497,
            'deaths' => 1076,
            'times_mvp' => 15,
            'win_rate' => 68,
            'adr'=> 127.6,
            'user_id' => DB::table('users')->where('nickname','starxo')->first()->id,
            ],
            [
            //JUGADOR3
            'kills' => 2238,
            'assists' => 684,
            'deaths' => 1493,
            'times_mvp' => 8,
            'win_rate' => 71,
            'adr'=> 155.4,
            'user_id' => DB::table('users')->where('nickname','sheydos')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 2549,
            'assists' => 762,
            'deaths' => 1776,
            'times_mvp' => 9,
            'win_rate' => 72,
            'adr'=> 172.5,
            'user_id' => DB::table('users')->where('nickname','trexx')->first()->id,
            ],
            [
            //JUGADOR5
            'kills' => 1766,
            'assists' => 594,
            'deaths' => 1485,
            'times_mvp' => 23,
            'win_rate' => 76,
            'adr'=> 150.1,
            'user_id' => DB::table('users')->where('nickname','Wolfen')->first()->id,
            ],
            [
            //USUARIOS NAVI
            //JUGADOR1
            'kills' => 1952,
            'assists' => 646,
            'deaths' => 2103,
            'times_mvp' => 21,
            'win_rate' => 65,
            'adr'=> 124.6,
            'user_id' => DB::table('users')->where('nickname','ANGE1')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 1247,
            'assists' => 504,
            'deaths' => 854,
            'times_mvp' => 16,
            'win_rate' => 76,
            'adr'=> 150.5,
            'user_id' => DB::table('users')->where('nickname','Leo')->first()->id,
            ],
            [
            //JUGADOR3
            'kills' => 3804,
            'assists' => 1044,
            'deaths' => 3020,
            'times_mvp' => 19,
            'win_rate' => 72,
            'adr'=> 252.5,
            'user_id' => DB::table('users')->where('nickname','Zyppan')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 2755,
            'assists' => 737,
            'deaths' => 2171,
            'times_mvp' => 23,
            'win_rate' => 74,
            'adr'=> 134.8,
            'user_id' => DB::table('users')->where('nickname','SUYGETSU')->first()->id,
            ],
            [
            //JUGADOR5
            'kills' => 5088,
            'assists' => 791,
            'deaths' => 3549,
            'times_mvp' => 30,
            'win_rate' => 74,
            'adr'=> 162.4,
            'user_id' => DB::table('users')->where('nickname','cNed')->first()->id,
            ],
            [
            //USUARIOS TEAM HERETICS
            //JUGADOR1
            'kills' => 2931,
            'assists' => 584,
            'deaths' => 2281,
            'times_mvp' => 21,
            'win_rate' => 71,
            'adr'=> 144.6,
            'user_id' => DB::table('users')->where('nickname','Mixwell')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 1758,
            'assists' => 751,
            'deaths' => 1540,
            'times_mvp' => 18,
            'win_rate' => 75,
            'adr'=> 197.8,
            'user_id' => DB::table('users')->where('nickname','AvovA')->first()->id,
            ],
            [
            //JUGADOR3
            'kills' => 1401,
            'assists' => 412,
            'deaths' => 1077,
            'times_mvp' => 12,
            'win_rate' => 76,
            'adr'=> 160.1,
            'user_id' => DB::table('users')->where('nickname','zeek')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 2061,
            'assists' => 705,
            'deaths' => 1949,
            'times_mvp' => 15,
            'win_rate' => 74,
            'adr'=> 127.4,
            'user_id' => DB::table('users')->where('nickname','Boo')->first()->id,
            ],
            [
            //JUGADOR5
            'kills' => 2708,
            'assists' => 432,
            'deaths' => 2357,
            'times_mvp' => 22,
            'win_rate' => 69,
            'adr'=> 144.8,
            'user_id' => DB::table('users')->where('nickname','keloqz')->first()->id,
            ],
            [
            //USUARIOS LEVIATÁN
            //JUGADOR1
            'kills' => 1251,
            'assists' => 279,
            'deaths' => 990,
            'times_mvp' => 21,
            'win_rate' => 70,
            'adr'=> 164.6,
            'user_id' => DB::table('users')->where('nickname','keznit')->first()->id,
            ],
            [
            //JUGADOR2
            'kills' => 2294,
            'assists' => 543,
            'deaths' => 1801,
            'times_mvp' => 26,
            'win_rate' => 74,
            'adr'=> 143.3,
            'user_id' => DB::table('users')->where('nickname','Tacolilla')->first()->id,
            ],
            [
            //JUGADOR3
            'kills' => 1487,
            'assists' => 406,
            'deaths' => 1160,
            'times_mvp' => 17,
            'win_rate' => 74,
            'adr'=> 160.7,
            'user_id' => DB::table('users')->where('nickname','kiNgg')->first()->id,
            ],
            [
            //JUGADOR4
            'kills' => 891,
            'assists' => 467,
            'deaths' => 762,
            'times_mvp' => 22,
            'win_rate' => 75,
            'adr'=> 133.7,
            'user_id' => DB::table('users')->where('nickname','Mazino')->first()->id,
            ],
            [
            //JUGADOR5
            'kills' => 277,
            'assists' => 158,
            'deaths' => 267,
            'times_mvp' => 0,
            'win_rate' => 74,
            'adr'=> 118.8,
            'user_id' => DB::table('users')->where('nickname','Shyy')->first()->id,
            ],
        ]);
    }
}