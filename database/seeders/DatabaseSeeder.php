<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gallary;
use Illuminate\Database\Seeder;
use Illuminate\Database\Factory\ProductsFactory;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        schema::disableForeignKeyConstraints();
        Product::truncate();
        schema::enableForeignKeyConstraints();
        Product::factory(10)->create();
        Gallary::factory(10)->create();
    }
}
