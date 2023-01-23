<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


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

        // \App\Models\Admin::create([
        //     "username" => "Aung Aung",
        //     "password" => "12345",
        //     "role" => "sale manager"
        // ]);

        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
