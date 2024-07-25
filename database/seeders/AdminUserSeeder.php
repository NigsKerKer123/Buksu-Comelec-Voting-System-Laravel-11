<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = "gwapoko@gmail.com";

        if (!DB::table('users')->where('email', $email)->exists()) {
            DB::table('users')->insert([
                'name' => "Kirk John L. Sieras",
                'email' => $email,
                'password' => Hash::make("gwapoko123"),
                'role' => "admin",
            ]);
        }
    }
}
