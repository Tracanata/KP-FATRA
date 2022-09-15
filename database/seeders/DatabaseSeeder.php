<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => '1112',
            'name' => 'Staff',
            'roles' => 'staff',
            'password'=>bcrypt('12345')
        ]);

        User::create([
            'username' => '1111',
            'name' => 'Admin',
            'roles' => 'admin',
            'password'=>bcrypt('12345')
        ]);
    }
}
