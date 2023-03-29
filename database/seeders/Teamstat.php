<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Teamstat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teamstats')->delete();
        DB::table('teamstats')->insert([
            [
            //Natus Vicere
            'wins' => 93,
            'losses' => 30,
            'ranking_position' => 2,
            'win_rate' => 75.61,
            'lose_rate' => 24.39,
            'team_id' => DB::table('teams')->where('name','Natus Vincere')->first()->id,
            ],
            [
            //Team Heretics
            'wins' => 4,
            'losses' => 7,
            'ranking_position' => 7,
            'win_rate' => 36.36,
            'lose_rate' => 63.64,
            'team_id' => DB::table('teams')->where('name','Team Heretics')->first()->id,
            ],
            [
            //Leviatan
            'wins' => 68,
            'losses' => 24,
            'ranking_position' => 1,
            'win_rate' => 73.91,
            'lose_rate' => 26.09,
            'team_id' => DB::table('teams')->where('name','Leviatán')->first()->id,
            ],
            [
            //FNATIC
            'wins' => 79,
            'losses' => 28,
            'ranking_position' => 1,
            'win_rate' => 73.83,
            'lose_rate' => 26.17,
            'team_id' => DB::table('teams')->where('name','FNATIC')->first()->id,
            ],
            [
            //100 Thieves
            'wins' => 30,
            'losses' => 11,
            'ranking_position' => 1,
            'win_rate' => 73.17,
            'lose_rate' => 26.83,
            'team_id' => DB::table('teams')->where('name','100 Thieves')->first()->id,
            ],
            [
            //KOI
            'wins' => 75,
            'losses' => 43,
            'ranking_position' => 26,
            'win_rate' => 63.56,
            'lose_rate' => 36.44,
            'team_id' => DB::table('teams')->where('name','KOI')->first()->id,
            ],
        ]);
    }
}