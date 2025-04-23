<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        static $dayOffset = 0;

        return [
            'weight' => $this->faker->randomFloat(1, 65, 75),
            'logged_at' => now()->subDays(35 - (++$dayOffset)),
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
