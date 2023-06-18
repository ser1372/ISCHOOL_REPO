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
            $review->img = $reviewData['img'];
            $review->description = $reviewData['description'];
            $review->save();
        }
    }
}