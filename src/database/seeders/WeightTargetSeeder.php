<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class WeightTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::first(); //

        if (!$user) {
            $user = \App\Models\User::factory()->create();
        }

        \App\Models\WeightTarget::factory()->create([
            'user_id' => $user->id,
        ]);
    }
}
