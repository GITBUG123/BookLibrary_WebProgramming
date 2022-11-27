<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::factory()->count(25)->create();
    }
}
