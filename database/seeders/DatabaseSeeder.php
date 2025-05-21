<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ExerciseSeeder::class,
            StretchSeeder::class,
            AdditionalExerciseSeeder::class,
            TrapExerciseSeeder::class,
        ]);
    }
}
