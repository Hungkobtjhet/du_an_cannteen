<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'first_name' => 'chrysanthus',
            'middle_name' => 'O',
            'last_name' => 'Chiagwah',
            'email' => 'chrysanthusobinna@gmail.com',
            'password' => Hash::make('12345678'), // Hashed password
            'role' => 'global_admin',
            'status' => 1,
            'phone_number' => '+446545748844',
            'address' => '123 Main Street, Springfield',
            'profile_picture' => null, // Default null if no picture
            'activation_token' => null, // Default null if no activation token
            'remember_token' => null,
            'two_factor_auth' => 0,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
