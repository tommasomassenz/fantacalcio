<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        League::updateOrCreate([
            'id' => '1',
            'organization_id' => Organization::first()->id,
            'name' => 'Campionato'
        ]);
    }
}
