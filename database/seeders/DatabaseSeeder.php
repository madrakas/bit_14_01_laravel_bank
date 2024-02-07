<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('users')->insert([
            'first_name' => 'Vilkas',
            'last_name' => 'Pilkas',
            'email' => 'vilkas.pilkas@zaliasmiskas.lt',
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Lapė',
            'last_name' => 'Snapė',
            'email' => 'lape.snape@zaliasmiskas.lt',
            'password' => Hash::make('123'),
        ]);
    }
}
