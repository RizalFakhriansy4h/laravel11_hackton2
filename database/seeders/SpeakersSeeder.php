<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Speaker;

class SpeakersSeeder extends Seeder
{
    public function run()
    {
        Speaker::create([
            'name' => 'John Doe',
            'social_media' => 'https://www.instagram.com/angelinajolie/',
            'photo_profile' => '/storage/speakers/Hs7xeU6ZC2QW0kiTms0BWLEeiYyw9VYhNmw3Q1Mo.jpg',
        ]);

        Speaker::create([
            'name' => 'Jane Smith',
            'social_media' => 'https://www.instagram.com/taylorswift/',
            'photo_profile' => '/storage/speakers/svKASdWoI1wWZ5sZwY8oDv2sAwn7dCvK2marfytz.jpg',
        ]);
    }
}
