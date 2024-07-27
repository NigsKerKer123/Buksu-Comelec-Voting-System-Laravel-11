<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test user',
            'email' => 'test@gmail.com',
            'password' => 'password',
        ]);

        try {
            $this->call([
                AdminUserSeeder::class,
            ]);
        } catch (\Exception $e) {
            // Throw an Error if the seed failed
            throw new \RuntimeException('Error seeding the database: ' . $e->getMessage());
        }
    }
}
