<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offers = Offer::factory()->count(5)->create();
        foreach ($offers as $key => $offer) {
            $categories = Category::inRandomOrder()->take(5)->get();
            $offer->categories()->sync($categories->pluck('id'));
        }
    }
}
