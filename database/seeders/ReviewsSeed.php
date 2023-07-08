<?php

namespace Database\Seeders;

use App\Models\Enums\ReviewEnum;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ReviewEnum::state as $reviewData) {
            $review = new Review;
            $review->name = $reviewData['name'];
            $review->name_en = $reviewData['name_en'];
            $review->img = $reviewData['img'];
            $review->description = $reviewData['description'];
            $review->description_en = $reviewData['description_en'];
            $review->save();
        }
    }
}