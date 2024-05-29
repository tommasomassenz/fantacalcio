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

        // Recupera l'ID della prima organizzazione
        $organizationId = Organization::first()->id;

        // Crea una nuova lega con l'ID dell'organizzazione
        League::create([
            'organizationId' => $organizationId,
            'name' => 'Campionato'
        ]);
    }
}

