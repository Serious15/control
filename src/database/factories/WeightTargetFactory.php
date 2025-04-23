<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WeightTarget;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightTargetFactory extends Factory
{
    protected $model = \App\Models\WeightTarget::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'target_weight' => 65.0,
            'set_at' => now()->subDays(35),
        ];
        return [
            'user_id' => User::factory(),  //
            'target_weight' => $this->faker->randomFloat(1, 50, 100), //
            'created_at' => now(),
            'updated_at' => now(),
        ];
        return [
            'user_id' => 1, // 初期ユーザー固定（山田太郎）
            'date' => $this->faker->dateTimeBetween('-35 days', 'today')->format('Y-m-d'), // 直近35日間
            'weight' => $this->faker->randomFloat(1, 55.0, 75.0), // 小数1位、体重55〜75kg
            'calories' => $this->faker->numberBetween(1500, 3000), // 食事量（カロリー）
            'exercise_time' => $this->faker->time('H:i:s'), // 運動時間（例: "01:15:00"）
            'exercise_content' => $this->faker->sentence(6), // 運動内容（例: "ランニングとストレッチ"）
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
