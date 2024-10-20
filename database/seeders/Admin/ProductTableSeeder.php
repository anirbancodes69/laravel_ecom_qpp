<?php

namespace Database\Seeders\Admin;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Generate 50 fake products
          for ($i = 0; $i < 50; $i++) {
            Product::create([
                'title' => fake()->unique()->sentence(3), // Unique title
                'description' => fake()->paragraph(), // Random description
                'price' => fake()->randomFloat(2, 10, 1000), // Random price between 10 and 1000
                'discount' => fake()->optional()->randomElement(['10%', '20%', '30%', null]), // Optional discount
                'status' => fake()->boolean(), // Random boolean for status
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
