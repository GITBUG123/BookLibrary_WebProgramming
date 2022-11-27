<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->create([
            'title' => 'World Whisperer',
            'image' => 'https://damonza.com/wp-content/uploads/portfolio/fiction/World-Whisperer.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Touch of Cold',
            'image' => 'https://templates.mediamodifier.com/5de544231b479b66c224768a/cold-hand-horror-novel-ebook-cover-template.jpg'
        ]);
        Book::factory()->create([
            'title' => 'The Tide',
            'image' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/ship-wreck-novel-mystery-book-cover-template-design-fba9b2211375c3977269ef113fa7c139_screen.jpg?ts=1637025200'
        ]);
        Book::factory()->create([
            'title' => 'The Hypocrite World',
            'image' => 'https://static-cse.canva.com/blob/921487/ColorfulIllustrationYoungAdultBookCover.jpg'
        ]);
        Book::factory()->create([
            'title' => 'The Victims Picture',
            'image' => 'https://dw0i2gv3d32l1.cloudfront.net/uploads/stage/stage_image/22348/optimized_large_thumb_1.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Crime',
            'image' => 'https://i.pinimg.com/736x/27/f6/76/27f6769661ebaa26976d4eb2c68e76c9.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Impervious',
            'image' => 'https://i.pinimg.com/originals/aa/5e/ce/aa5ece33b0241b455c8955c99e77ad5f.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Memory',
            'image' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/contemporary-fiction-night-time-book-cover-design-template-1be47835c3058eb42211574e0c4ed8bf_screen.jpg?ts=1637012564'
        ]);
        Book::factory()->create([
            'title' => 'New World',
            'image' => 'https://www.creativindie.com/wp-content/uploads/2017/04/New-WOrld-299x449.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Only Words',
            'image' => 'http://www.designbookcover.pt/uploads/media/photos/cache/b1_only_words_72_media_huge_thumbnail.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Reckoning',
            'image' => 'http://www.designbookcover.pt/uploads/media/photos/cache/reckoning_72_media_huge_thumbnail.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Jack the Thieves',
            'image' => 'http://www.designbookcover.pt/uploads/media/photos/cache/jack_the_thieves_b1_72_media_huge_thumbnail.jpg'
        ]);
        Book::factory()->create([
            'title' => 'End Game',
            'image' => 'https://i.pinimg.com/564x/9f/a0/8e/9fa08e532e0a0e267a38fec439fac6cd.jpg'
        ]);
        Book::factory()->create([
            'title' => 'Rewind',
            'image' => 'https://i.pinimg.com/564x/6d/4c/5b/6d4c5b21896b899d3f3cfa38505962d5.jpg'
        ]);
        Book::factory()->create([
            'title' => 'The Savage Earth',
            'image' => 'https://www.theyashelf.com/wp-content/uploads/2017/08/51kA5AVnIZL.jpg'
        ]);
    }
}
