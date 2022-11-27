<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Adventure Stories', 'Crime', 'Comedy', 'Fairy Tales', 'Fantasy', 'Mystery', 'Thrillers'];
        foreach ($data as $category) {
            Category::factory()->create([
                'name' => $category
            ]);
        }
    }
}
