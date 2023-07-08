<?php

namespace Database\Seeders;

use App\Models\Enums\LearnEnum;
use App\Models\Learn;
use Illuminate\Database\Seeder;

class LearnSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (LearnEnum::state as $learn) {
            $newLearn = new Learn;
            $newLearn->img = $learn['img'];
            $newLearn->description = $learn['description'];
            $newLearn->description_en = $learn['description_en'];
            $newLearn->save();
        }
    }
}
