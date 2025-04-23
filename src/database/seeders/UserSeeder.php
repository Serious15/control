<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Eloquent\Sorting;
use User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test1234',
            'created_at' => '46.5kg',
            'updated_at' => '46.5kg',
        ]);
    }
}
