<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Database\Factories\OrderDetailFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            ReviewSeeder::class,
            DetailOrderSeeder::class,
        ]);

        

      
        

        

        
    }
}
