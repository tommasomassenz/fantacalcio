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
    public function run(): void
    {
        $organizations = [
            [
                'id' => 1,
                'name' => 'FantaSKN1'
            ],
            [
                'id' => 2,
                'name' => 'FantaSKN2'
            ],
            [
                'id' => 3,
                'name' => 'FantaSKN3'
            ],
        ];
        
        foreach ($organizations as $organization) {
            Organization::create($organization);
        }
        
       
    }
}
