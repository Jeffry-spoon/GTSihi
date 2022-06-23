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
            'description' => 'Sampah manusia berupa sisa pengolahan dari makanan dan perlengkapan rumah tangga yang biasa dibuang oleh seseorang atau banyak, sampah ini banyak menumpuk karena kebutuhan sehari-hari manusia. \n

            Sampah alam merupakan sampah hasil dari alam yang dapat membusuk dan berguna bagi lingkungan sekitar, Sampah nuklir merupakan sampah yang berbahaya dan tidak dapat didaur ulang, sampah ini dibuang dengan hati-hati dan tidak boleh sembarangan, banyak yang harus disiapkan sebelum membuang sampah nuklir dan perlu extra berhati-hati.
            Sampah pertambangan biasanya berasal dari hasil galian dan batu-batu yang dipecahkan, sampah ini biasanya dibiarkan begitu saja karena dapat menyatu dengan alam dan tidak membawa dampak apapun, namun tanpa diketahui sampah ini dapat didaur ulang. \n

           Sampah industri atau sering disebut limbah pabrik, biasanya sampah ini dibuang dengan tidak hati-hati dan dapat membawa dampak buruk ke lingkungan dan manusia yang disekitarnya karena dapat membuat lingkungan tercemar dan merusak ekosistem di sekitarnya. Sampah Konsumsi hampir sama dengan sampah manusia namun sampah ini ada beberapa yang berasal dari fast food dan pabrik makanan.
           ',
            'picture' => 'testPicture.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]
    ];

    EdukasiBlog::insert($edukasi);
    }
}
