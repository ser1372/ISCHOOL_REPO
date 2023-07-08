<?php

namespace Database\Seeders;

use App\Models\Enums\OptionsEnum;
use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionsSeed extends Seeder
{
    public function run(): void
    {
        foreach (OptionsEnum::state as $optionData) {
            $option = new Option;
            $option->name = $optionData['name'];
            $option->value = $optionData['value'];
            $option->save();
        }
    }
}
