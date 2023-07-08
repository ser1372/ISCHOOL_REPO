<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enums\PriceEnum;
use App\Models\Price;

class PricesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(PriceEnum::state as $price){
            $newPrice = new Price;
            $newPrice->price_uah = $price['price_uah'];
            $newPrice->sale_price_uah = $price['sale_price_uah'];
            $newPrice->price_gbp = $price['price_gbp'];
            $newPrice->sale_price_gbp = $price['sale_price_gbp'];
            $newPrice->save();
        }
    }
}
