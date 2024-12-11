<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
       
        Students::factory()->create([
            'id' => 1,
            'name' => 'Agron',
            'surname' => 'Berisha',
            'city' => 'Skopje',
        ]);
    }
}
