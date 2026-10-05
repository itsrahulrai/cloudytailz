<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pet Nutrition',
                'slug' => 'pet-nutrition',
                'description' => 'Nutritional advice, diet plans, and healthy feeding guidelines for dogs and cats.',
                'status' => true,
            ],
            [
                'name' => 'Pet Care Tips',
                'slug' => 'pet-care-tips',
                'description' => 'Daily routines, behavioral advice, and grooming tips to keep your pets happy.',
                'status' => true,
            ],
            [
                'name' => 'Vet Advice',
                'slug' => 'vet-advice',
                'description' => 'Expert veterinary insights, warning signs, and preventive health tips.',
                'status' => true,
            ],
        ];

        foreach ($categories as $cat) {
            \App\Models\Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
