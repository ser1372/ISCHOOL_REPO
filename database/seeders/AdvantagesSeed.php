<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Advantage;
use App\Models\Enums\AdvantageEnum;

class AdvantagesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (AdvantageEnum::state as $advantage) {
            $newAdvantage = new Advantage();
            $newAdvantage->img = $advantage['img'];
            $newAdvantage->advantages_ua = $advantage['advantages_ua'];
            $newAdvantage->advantages_en = $advantage['advantages_en'];
            $newAdvantage->save();
        }
    }
}
