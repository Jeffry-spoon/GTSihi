<?php

namespace Database\Seeders;

use App\Models\EdukasiBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdukasiBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $edukasi = [
        [
            'title' => 'Sumbernya',
            'slug' => 'sumbernya',
            'description' => '',
            'picture' => 'img/testPicture.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]
    ];

    EdukasiBlog::insert($edukasi);
    }
}
