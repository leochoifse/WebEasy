<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Leo',
            'email' => 'leochoi@example.com',
        ]);

        $user->assignRole("admin");

        
    }
}