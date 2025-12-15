<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Players;


class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Players::create([
            'name' => 'John Doe',
            'position' => 'Forward',
            'photo' => '/images/players/john.jpg'
        ]);
    }
}
