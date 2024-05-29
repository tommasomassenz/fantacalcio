<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;
use App\Models\Player;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'id' => '1',
                'organization_id' => Organization::first()->id,
                'name' => 'PEPSI-Team',
                'president' => 'Tommaso Massenz',
                'color' => 'red & black',
            ],
            [
                'id' => '2',
                'organization_id' => Organization::first()->id,
                'name' => 'BenCa-Team',
                'president' => 'Benedetto Catalano',
                'color' => 'blue & black'
            ],
        ];
        foreach ($teams as $team) {
            Team::updateOrCreate($team);

            Player::factory(20)->create(["team_id" => $team["id"]]);
        }
    }
}

#0