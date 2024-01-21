<?php

namespace Database\Seeders;

use App\Models\User;
use App\Constants\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAdmin();
        $this->createSeller();
    }

    /**
     * Create admin users.
     */
    private function createAdmin(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => "Admin",
                'role' => Role::ADMIN,
                'password'  => Hash::make('password'),
            ]
        );
    }

    /**
     * Create seller users.
     */
    private function createSeller(): void
    {

        User::updateOrCreate(
            ['email' => 'seller@test.com'],
            [
                'name' => "Seller",
                'role' => Role::USER,
                'password'  => Hash::make('password'),
            ]
        );
    }
}
