<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Buat beberapa entri dummy dalam tabel events
        Event::create([
            'title' => 'Transformational Sales Conference 2023',
            'thumbnail' => 'https://tbnindonesia.org/images/transformational-sales-conference-2023-.jpg',
            'description' => "It's crucial to adapt to the changing sales landscape in the digital age, and Seth Godin's quote emphasizes the importance of customer-centricity.
            Digital transformation has indeed shifted the focus towards online sales, but it's essential to remember that serving the customer's needs remains paramount.
            The Transformational Sales Conference sounds like a great opportunity to explore the evolving world of sales and learn how to provide excellent service in both online and offline contexts.",
            'slug' => Str::slug('Transformational-Sales-Conference-2023_' . now()->format('Y-m-d'), '-'),
            'creator_id' => 1,
            'speakers_id' => json_encode([1, 2]),
            'location' => 'Jakarta',
            'url_youtube' => 'https://www.youtube.com/embed/43Dm9FG5nbc',
            'url_map' => 'https://maps.google.com/maps?width=100%25&height=600&hl=en&q=gbk+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed',
            'start_datetime' => '2024-04-30 08:00:00',
            'end_datetime' => '2024-04-30 17:00:00',
        ]);

        Event::create([
            'title' => 'TBN Asia Conference 2023',
            'thumbnail' => 'https://tbnindonesia.org/images/tbn-asia-conference-2023-2.jpg',
            'description' => "In a world once plagued by environmental degradation and societal inequalities, a transformative movement emerged, igniting a path towards a sustainable future. This narrative follows the lives of four individuals whose passion and dedication became catalysts for change in agriculture, education, green technology, digital innovation, and art and culture.
            Together, they embarked on a shared mission to harmonize humanity's relationship with the planet and shape a brighter tomorrow.",
            'slug' => Str::slug('TBN-Asia-Conference-2023_' . now()->format('Y-m-d'), '-'),
            'creator_id' => 2,
            'speakers_id' => json_encode([1, 2]),
            'location' => 'Bandung',
            'url_youtube' => 'https://www.youtube.com/embed/MnrJzXM7a6o',
            'url_map' => 'https://maps.google.com/maps?width=100%25&height=600&hl=en&q=Bandung+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed',
            'start_datetime' => '2024-05-01 09:00:00',
            'end_datetime' => '2024-05-01 18:00:00',
        ]);

    }
}
