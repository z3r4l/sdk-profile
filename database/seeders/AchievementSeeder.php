<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'user_id' => 1,
                'title' => 'Juara Olimpiade Matematika Nasional',
                'slug' => 'juara-olimpiade-matematika-nasional',
                'image' => 'images/olimpiade-matematika.jpg',
                'published_at' => '2024-01-01',
                'content' => "Prestasi luar biasa diraih oleh siswa kami dalam Olimpiade Matematika Nasional.\n\nKompetisi ini diikuti oleh ratusan peserta dari seluruh Indonesia.\n\nDengan persiapan matang, siswa kami berhasil meraih medali emas.\n\nDukungan dari guru dan fasilitas yang memadai turut mendukung keberhasilan ini.\n\nPrestasi ini menjadi motivasi bagi seluruh siswa untuk terus berprestasi di bidang akademik.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Lomba Cerdas Cermat',
                'slug' => 'juara-lomba-cerdas-cermat',
                'image' => 'images/cerdas-cermat.jpg',
                'published_at' => '2024-01-02',
                'content' => "Tim cerdas cermat sekolah kami meraih juara pertama dalam kompetisi tingkat provinsi.\n\nKompetisi ini menguji pengetahuan umum, sains, dan sejarah.\n\nKerja sama tim yang solid menjadi kunci keberhasilan mereka.\n\nKemenangan ini membuktikan bahwa siswa kami mampu bersaing di tingkat yang lebih tinggi.\n\nDengan semangat belajar yang tinggi, kami yakin mereka akan meraih lebih banyak prestasi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Kompetisi Seni Lukis',
                'slug' => 'juara-kompetisi-seni-lukis',
                'image' => 'images/seni-lukis.jpg',
                'published_at' => '2024-01-03',
                'content' => "Salah satu siswa kami berhasil memenangkan kompetisi seni lukis tingkat nasional.\n\nKarya yang dibuat menggambarkan keindahan budaya Indonesia.\n\nPenghargaan ini menunjukkan bahwa kreativitas siswa kami sangat luar biasa.\n\nGuru seni kami memberikan bimbingan intensif untuk membantu pengembangan bakat siswa.\n\nKemenangan ini menjadi inspirasi bagi siswa lain untuk mengejar impian mereka di bidang seni.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Lomba Debat Bahasa Inggris',
                'slug' => 'juara-lomba-debat-bahasa-inggris',
                'image' => 'images/debat-bahasa-inggris.jpg',
                'published_at' => '2024-01-04',
                'content' => "Siswa kami meraih juara dalam lomba debat bahasa Inggris tingkat regional.\n\nKompetisi ini diikuti oleh sekolah-sekolah terbaik dari berbagai daerah.\n\nKemampuan berpikir kritis dan penguasaan bahasa menjadi keunggulan siswa kami.\n\nDengan kerja keras dan latihan rutin, mereka berhasil mengalahkan tim lawan.\n\nPrestasi ini menunjukkan pentingnya penguasaan bahasa Inggris di era globalisasi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Kompetisi Atletik Tingkat Kota',
                'slug' => 'juara-kompetisi-atletik-tingkat-kota',
                'image' => 'images/kompetisi-atletik.jpg',
                'published_at' => '2024-01-05',
                'content' => "Siswa kami menunjukkan kemampuan luar biasa di kompetisi atletik tingkat kota.\n\nMereka berhasil meraih medali di berbagai nomor lomba, termasuk lari dan lompat jauh.\n\nLatihan intensif dan dukungan pelatih memberikan hasil yang memuaskan.\n\nPrestasi ini membuktikan bahwa siswa kami tidak hanya unggul secara akademik, tetapi juga di bidang olahraga.\n\nKami akan terus mendukung siswa untuk mengembangkan potensi mereka di bidang olahraga.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Lomba Pidato Bahasa Indonesia',
                'slug' => 'juara-lomba-pidato-bahasa-indonesia',
                'image' => 'images/pidato-bahasa-indonesia.jpg',
                'published_at' => '2024-01-06',
                'content' => "Dalam lomba pidato bahasa Indonesia tingkat kabupaten, siswa kami berhasil menjadi juara.\n\nPidato yang disampaikan penuh semangat dan memiliki pesan yang inspiratif.\n\nKompetisi ini melatih siswa untuk berbicara di depan umum dengan percaya diri.\n\nDengan kemenangan ini, siswa kami membuktikan bahwa mereka memiliki kemampuan komunikasi yang luar biasa.\n\nPrestasi ini menjadi motivasi bagi siswa lain untuk terus mengembangkan kemampuan mereka.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Kompetisi Sains Tingkat Provinsi',
                'slug' => 'juara-kompetisi-sains-tingkat-provinsi',
                'image' => 'images/kompetisi-sains.jpg',
                'published_at' => '2024-01-07',
                'content' => "Prestasi gemilang diraih siswa kami di kompetisi sains tingkat provinsi.\n\nMereka menunjukkan pemahaman yang mendalam dalam bidang fisika dan biologi.\n\nDengan bimbingan guru, siswa mampu menyelesaikan soal-soal yang kompleks.\n\nKompetisi ini menjadi ajang untuk mengasah kemampuan akademik siswa.\n\nKami bangga atas dedikasi mereka dalam meraih prestasi ini.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Lomba Tari Tradisional',
                'slug' => 'juara-lomba-tari-tradisional',
                'image' => 'images/tari-tradisional.jpg',
                'published_at' => '2024-01-08',
                'content' => "Siswa kami berhasil memenangkan lomba tari tradisional tingkat nasional.\n\nPenampilan mereka memukau juri dengan keindahan gerakan dan kostum yang autentik.\n\nLomba ini menjadi ajang untuk memperkenalkan budaya lokal kepada generasi muda.\n\nDengan latihan rutin dan bimbingan pelatih, mereka tampil dengan percaya diri.\n\nPrestasi ini menunjukkan pentingnya melestarikan seni dan budaya Indonesia.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Kompetisi Robotik Tingkat Nasional',
                'slug' => 'juara-kompetisi-robotik-tingkat-nasional',
                'image' => 'images/kompetisi-robotik.jpg',
                'published_at' => '2024-01-09',
                'content' => "Dalam kompetisi robotik tingkat nasional, siswa kami berhasil meraih juara pertama.\n\nRobot yang mereka rancang mampu menyelesaikan tantangan dengan sempurna.\n\nKompetisi ini melatih siswa untuk berpikir kreatif dan inovatif.\n\nGuru pembimbing memberikan dukungan penuh dalam proses perancangan robot.\n\nKemenangan ini membuktikan bahwa siswa kami siap menghadapi tantangan teknologi masa depan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Juara Kompetisi Musik Tradisional',
                'slug' => 'juara-kompetisi-musik-tradisional',
                'image' => 'images/musik-tradisional.jpg',
                'published_at' => '2024-01-10',
                'content' => "Siswa kami meraih juara dalam kompetisi musik tradisional tingkat nasional.\n\nPenampilan mereka menggambarkan harmoni dan keindahan musik khas Indonesia.\n\nKompetisi ini menjadi ajang untuk mengenalkan keunikan budaya kepada generasi muda.\n\nLatihan intensif bersama pelatih menghasilkan performa yang memukau.\n\nPrestasi ini menjadi kebanggaan bagi sekolah dan inspirasi bagi siswa lain.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('achievements')->insert($achievements);
    }
}
