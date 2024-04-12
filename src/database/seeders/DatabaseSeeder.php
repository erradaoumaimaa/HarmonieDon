<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        $this->call([
//            CategorySeeder::class
//        ]);

        User::factory()->create([
            'email' => 'admin@example.net',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'email' => 'donor@example.net',
            'role' => 'donor'
        ]);

        User::factory()->create([
            'email' => 'user@example.net',
            'role' => 'user'
        ]);

        User::factory()->create([
            'email' => 'association@example.net',
            'role' => 'association'
        ]);
    }
}
