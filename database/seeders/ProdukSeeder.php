<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produkList = [
            ['name' => 'Super Kancing', 'image' => 'superkancing.jpg', 'desc' => 'Kerupuk udang renyah berbentuk kancing, cocok untuk lauk atau camilan.', 'desc_long' => 'Super Kancing adalah kerupuk khas yang dibuat dari bahan utama udang segar dengan proses pengeringan alami. Teksturnya sangat renyah dengan aroma udang yang kuat dan rasa gurih yang pas. Cocok dinikmati sebagai camilan atau pelengkap hidangan tradisional Anda.', 'price' => 13000, 'stock'=>50],
            ['name' => 'Kerupuk Sanggul Mini', 'image' => 'sanggulmini.jpg', 'desc' => 'Kerupuk ikan tradisional khas pesisir dengan rasa gurih menggoda', 'desc_long' => 'Kerupuk Sanggul Mini adalah versi lebih kecil dari kerupuk sanggul klasik yang dibuat dari ikan pilihan dan bumbu tradisional. Memiliki rasa gurih dan tekstur renyah yang unik, cocok untuk menambah cita rasa pada hidangan harian Anda.', 'price' => 14000, 'stock'=>50],
            ['name' => 'Kerupuk Sanggul', 'image' => 'kerupuksanggul.jpg', 'desc' => 'Kerupuk khas berbentuk sanggul dengan rasa gurih dan tekstur renyah', 'desc_long' => 'Kerupuk Sanggul adalah kerupuk klasik yang memiliki bentuk unik dan tekstur renyah sempurna. Cocok sebagai teman makan atau camilan di waktu senggang', 'price' => 13000, 'stock'=>50],
            ['name' => 'Kerupuk Mawar', 'image' => 'kerupukmawar.jpg', 'desc' => 'Varian klasik kerupuk dengan aroma khas dan tekstur renyah', 'desc_long' => 'Kerupuk Mawar terbuat dari ikan segar dengan bumbu khas tradisional yang memberikan cita rasa autentik Indonesia. Teksturnya renyah dan gurih, pas untuk menemani hidangan utama Anda.', 'price' => 10000, 'stock'=>50],
            ['name' => 'Kerupuk Mawar Udang', 'image' => 'kerupukmawarudang.jpg', 'desc' => 'Varian klasik kerupuk udang dengan aroma khas dan tekstur renyah', 'desc_long' => 'Kerupuk Mawar adalah varian klasik kerupuk udang yang memiliki aroma khas udang laut dan tekstur renyah sempurna. Cocok sebagai teman makan atau camilan di waktu senggang.', 'price' => 10000, 'stock'=>50],
            ['name' => 'Kerupuk Teratai', 'image' => 'kerupukteratai.jpg', 'desc' => 'Kerupuk renyah dengan aroma ikan menggoda', 'desc_long' => 'Kerupuk Teratai menawarkan rasa unik kerupuk yang ringan, renyah, dan beraroma ikan yang menggoda selera. Cocok sebagai camilan dan pelengkap hidangan sehari-hari.', 'price' => 10000, 'stock'=>50],
            ['name' => 'Kerupuk Getas', 'image' => 'getas.jpg', 'desc' => 'Kerupuk ikan padat rasa, cocok untuk pelengkap makanan berat.', 'desc_long' => 'Getas adalah kerupuk ikan dengan tekstur padat dan rasa kuat yang cocok sebagai pelengkap makanan berat. Membawa sensasi gurih dan renyah yang nikmat saat disantap.', 'price' => 20000, 'stock'=>50],
            ['name' => 'Kemplang', 'image' => 'kemplang.jpg', 'desc' => 'Kerupuk ikan bakar khas Palembang, nikmat dengan sambal.', 'desc_long' => 'Kemplang adalah kerupuk ikonik dari Palembang yang dibuat dari ikan tenggiri. Proses pembuatannya yang dipanggang (bukan digoreng) memberikan aroma smoky yang khas. Sangat nikmat disantap dengan sambal colek pedas manis.', 'price' => 25000, 'stock'=>50],
            ['name' => 'Kerupuk Kulit Sapi', 'image' => 'kerupukkulit.jpg', 'desc' => 'Kerupuk rambak dari kulit sapi asli, renyah dan gurih.', 'desc_long' => 'Dibuat dari kulit sapi pilihan yang diolah secara higienis, kerupuk kulit ini memiliki tekstur yang sangat renyah dan mengembang saat digoreng. Rasa gurihnya yang khas membuatnya cocok untuk teman makan soto atau bakso.', 'price' => 22000, 'stock'=>50],
            ['name' => 'Emping Melinjo', 'image' => 'empingmelinjo.jpg', 'desc' => 'Keripik tipis dari biji melinjo dengan rasa pahit yang khas.', 'desc_long' => 'Emping Melinjo adalah keripik tradisional yang dibuat dengan menumbuk biji melinjo hingga pipih. Memiliki rasa gurih dengan sentuhan pahit yang unik dan disukai banyak orang. Cocok untuk pelengkap gado-gado.', 'price' => 18000, 'stock'=>50],
            ['name' => 'Kerupuk Bawang', 'image' => 'kerupukbawang.jpg', 'desc' => 'Kerupuk renyah dengan aroma wangi dan rasa gurih dari bawang putih.', 'desc_long' => 'Kerupuk Bawang adalah pilihan favorit sepanjang masa. Dibuat dengan campuran tepung tapioka dan bawang putih berkualitas, menghasilkan kerupuk yang renyah, wangi, dan gurih. Sempurna untuk segala suasana.', 'price' => 9000, 'stock'=>50],
            ['name' => 'Kerupuk Pasir (Mlarat)', 'image' => 'kerupukmlarat.jpg', 'desc' => 'Kerupuk warna-warni yang digoreng tanpa minyak menggunakan pasir.', 'desc_long' => 'Unik dan lebih sehat, Kerupuk Mlarat digoreng menggunakan pasir panas sehingga bebas minyak. Teksturnya sangat renyah dan ringan, dengan warna-warni ceria yang menarik. Rasanya gurih dan cocok dinikmati dengan sambal.', 'price' => 11000, 'stock'=>50],
            ['name' => 'Kerupuk Ikan Tenggiri', 'image' => 'ikantenggiri.jpg', 'desc' => 'Kerupuk premium dengan rasa ikan tenggiri yang dominan dan gurih.', 'desc_long' => 'Dibuat dari daging ikan tenggiri segar berkualitas tinggi, kerupuk ini menawarkan rasa ikan yang kuat dan autentik. Teksturnya padat dan renyah, menjadikannya pilihan premium untuk para pecinta kerupuk ikan.', 'price' => 23000, 'stock'=>50],
            ['name' => 'Kerupuk Jengkol', 'image' => 'kerupukjengkol.jpg', 'desc' => 'Kerupuk dengan aroma dan rasa jengkol yang khas dan unik.', 'desc_long' => 'Bagi para pencinta jengkol, kerupuk ini adalah pilihan yang tepat. Rasa dan aroma khas jengkol berpadu dengan tekstur renyah kerupuk, menciptakan pengalaman rasa yang unik dan tak terlupakan.', 'price' => 15000, 'stock'=>50],
        ];

        foreach ($produkList as $data) {
            Produk::create($data);
        }
    }
}