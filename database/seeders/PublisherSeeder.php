<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::factory()->create([
            'name' => 'Hachette Co.',
            'email' => 'HachetteCo@gmail.com',
            'image' => 'https://www.hachette.co.uk/wp-content/uploads/2020/02/cropped-Hachette-H-Transparent.png?fit=512%2C512'
        ]);
        Publisher::factory()->create([
            'name' => 'Penguin House Co.',
            'email' => 'PenguinHouseCo@gmail.com',
            'image' => 'https://ruangtunggurio.files.wordpress.com/2019/02/qxmvujhh_400x400.jpg'
        ]);
        Publisher::factory()->create([
            'name' => 'Macmillan Co.',
            'email' => 'MacmillanCo@gmail.com',
            'image' => 'https://pbs.twimg.com/profile_images/1320749621933674496/XO02-agz_400x400.png'
        ]);
        Publisher::factory()->create([
            'name' => 'Long Pearson Co.',
            'email' => 'LongPearsonCo@gmail.com',
            'image' => 'https://d1.awsstatic.com/PearsonLogo_Primary_Blk_RGB.c370c3ba1c02f792448d068b11b84fb289e68fcc.jpg'
        ]);

    }
}
