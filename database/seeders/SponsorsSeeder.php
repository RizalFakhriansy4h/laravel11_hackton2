<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data dummy ke tabel sponsors
        Sponsor::create([
            'name' => 'yss',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/yss.png',
        ]);

        Sponsor::create([
            'name' => 'Acton Institute',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/ActonInstitute.jpg',
        ]);

        Sponsor::create([
            'name' => 'TDR One Team',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/tdr-one-team.png',
        ]);

        Sponsor::create([
            'name' => 'WHydrocolloids',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/WHydrocolloids.png',
        ]);

        Sponsor::create([
            'name' => 'actxplorer',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/actxplorer.png',
        ]);

        Sponsor::create([
            'name' => 'MEEK',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/MEEK.jpg',
        ]);

        Sponsor::create([
            'name' => 'Mastereign',
            'image' => 'https://conference.tbnindonesia.org/assets/images/partners/Mastereign.png',
        ]);

        // Tambahkan data lain jika diperlukan
    }
}
