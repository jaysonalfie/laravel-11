<?php

namespace Database\Seeders;

use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /**
         * Factories - scaffolding data and preparing tests
         * Database seeders = provide classes where we get to trigger the factories or db callsgit 
         */

        User::factory()->create([
            'name' => 'Jayson Alfie',
            'email' => 'jaysonalfie@gmail.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
