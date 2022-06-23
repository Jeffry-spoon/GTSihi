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
            <br><br>Sampah alam merupakan sampah hasil dari alam yang dapat membusuk dan berguna bagi lingkungan sekitar, Sampah nuklir merupakan sampah yang berbahaya dan tidak dapat didaur ulang, sampah ini dibuang dengan hati-hati dan tidak boleh sembarangan, banyak yang harus disiapkan sebelum membuang sampah nuklir dan perlu extra berhati-hati.
            <br><br>Sampah pertambangan biasanya berasal dari hasil galian dan batu-batu yang dipecahkan, sampah ini biasanya dibiarkan begitu saja karena dapat menyatu dengan alam dan tidak membawa dampak apapun, namun tanpa diketahui sampah ini dapat didaur ulang.
            <br><br>Sampah industri atau sering disebut limbah pabrik, biasanya sampah ini dibuang dengan tidak hati-hati dan dapat membawa dampak buruk ke lingkungan dan manusia yang disekitarnya karena dapat membuat lingkungan tercemar dan merusak ekosistem di sekitarnya. 
            <br><br>Sampah Konsumsi hampir sama dengan sampah manusia namun sampah ini ada beberapa yang berasal dari fast food dan pabrik makanan.</p>',
            'picture' => 'img/sumber-manusia.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ],
        [
            'title' => 'Sifatnya',
            'slug' => 'sifatnya',
            'description' => '<p>Sampah organik merupakan sampah yang dapat diurai dimana hal ini sampah yang mudah membusuk seperti daging, sayuran, daun-daun kering, dan sebagainya. Sampah ini mudah diolah menjadi kompos untuk tumbuhan.
            <br><br>Sampah anorganik merupakan sampah yang tidak dapat diurai, dalam hal ini tidak mudah membusuk bahkan tidak bisa membusuk seperti plastik, kaleng, gelas kaca. Beberapa sampah anorganik dapat didaur ulang atau dijual seperti plastik, kaca, kertas, dan karton.
            Sampah beracun merupakan limbah dari bahan-bahan yang berbahaya 
            </p>',
            'picture' => 'img/sifat-organik.jpg',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ],
        [
            'title' => 'Bentuknya',
            'slug' => 'bentuknya',
            'description' => '<p>Sampah padat merupakan segala bahan buangan selain sampah cair dan polusi udara, sampah padat dapat berupa sampah lingkungan, sampah ini dapat dibagi menjadi 2 yaitu:<br>
            <br>Biodegradable
            jenis ini merupakan sampah yang dapat diuraikan oleh proses biologi  seperti sisa-sisa hewan, sampah dapur, dan perkebunan.
            <br><br>Non-Biodegradable
            sampah yang tidak dapat diurai oleh proses biologis seperti plastik, kardus, kaca/beling, keramik, dan lain lain.

            <br><br>Sampah cair adalah bahan cairan yang digunakan dan tidak diperlukan, dibuang ke tempat sampah. Jenis sampah cair dapat dibagi menjadi dua yaitu:
            <br>Cairan hitam yakni sampah cair yang dihasilkan dari toilet dan mengandung bakteri yang berbahaya
            <br>Cairan rumah tangga, yaitu sampah cair yang dihasilkan dari daput, kamar mandi. dan tempat cucian.

            <br><br>Sampah radioaktif , sampah ini merupakan sampah nuklir hasil dari fusi dan fisi nuklir yang menghasilkan uranium dan thorium yang sangat berbahaya bagi lingkngan hidup dan juga manusia. Oleh karena itu sampah nuklir ini tersimpan di tempat yang tidak melakukan aktivitas tempat uang dituju, biasanya bekas tambang garam atau dasar laut.</p>
',
            'picture' => 'img/sumber-alam.png',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]
    ];

    EdukasiBlog::insert($edukasi);
    }
}
