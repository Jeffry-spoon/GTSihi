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
            'description' => '<p>Sampah manusia berupa sisa pengolahan dari makanan dan perlengkapan rumah tangga yang biasa dibuang oleh seseorang atau banyak, sampah ini banyak menumpuk karena kebutuhan sehari-hari manusia.
            </p>',
            'picture' => 'img/testPicture.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]
        [
            'title' => 'Sifatnya',
            'slug' => 'Sifatnya',
            'description' => '',
            'picture' => 'img/item-1.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]
    ];

    EdukasiBlog::insert($edukasi);
    }
}
