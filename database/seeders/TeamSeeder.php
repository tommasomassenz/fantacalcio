<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Player;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cancella tutti i record esistenti
        Team::truncate();

        // Creare le squadre
        $teams = [
            [
                'organizationName' => 'FantaSkn',
                'name' => 'FC Inter',
                'coach' => 'Benkata'
            ],
            //altre squadre
        ];

        foreach ($teams as $teamData) {
            $team = Team::create($teamData);

            // Creare 20 giocatori utilizzando la factory dei giocatori
            Player::factory(20)->create([
                'teamName' => $team->name // Utilizziamo il nome della squadra come teamName
            ]);
        }
    }
}
