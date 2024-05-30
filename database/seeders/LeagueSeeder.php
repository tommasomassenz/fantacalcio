<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\League;
use App\Models\Organization;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cancella tutti i record esistenti
        League::truncate();

        // Creare la prima lega
        League::create([
            'organizationName' => 'FantaSkn',
            'name' => 'Campionato'
        ]);

        // Creare la seconda lega
        League::create([
            'organizationName' => 'FantaSkn',
            'name' => 'Champions League'
        ]);
    }
}

