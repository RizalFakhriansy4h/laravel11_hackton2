<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'fakhri',
            'email' => 'fakhri@gmail.com',
            'password' => Hash::make('fakhri'),
            'photo_profile' => '/assets/img/users/fakhri.jpg',
            'role' => 1,
        ]);

        User::create([
            'name' => 'rizal',
            'email' => 'rizal@gmail.com',
            'password' => Hash::make('rizal'),
            'photo_profile' => '/assets/img/users/rizal.jpg',
            'link_ig' => 'https://www.instagram.com/davidbeckham/',
            'bio' => 'I love Avril Lavigne',
            'job' => 'Back-end',
            'role' => 1,
        ]);

        User::create([
            'name' => 'sahirin',
            'email' => 'sahirin@gmail.com',
            'password' => Hash::make('sahirin'),
            'photo_profile' => '/assets/img/users/sahirin.jpg',
        ]);
        
        User::create([
            'name' => 'sugiyat',
            'email' => 'sugiyat@gmail.com',
            'password' => Hash::make('sugiyat'),
            'photo_profile' => '/assets/img/users/sugiyat.jpg',
        ]);

    }
}
