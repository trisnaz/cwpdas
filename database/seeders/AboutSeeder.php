<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul' => 'Company',
            'subjudul' => 'lorem ipsum',
            'deskripsi_1' => 'logo.png',
            'deskripsi_2' => 'Jl. Mawar No.53',
            'kelebihan_1' => 'company@gmail.com',
            'kelebihan_2' => 'company@gmail.com',
            'kelebihan_3' => 'company@gmail.com',
            'kelebihan_4' => 'company@gmail.com',

        ]);
    }
}
