<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Cancella tutti i record esistenti
        Organization::truncate();

        Organization::create([
            'name' => 'FantaSkn',
        ]);

        // Altri record se necessario
    }
}
