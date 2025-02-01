<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class CategoryAndPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');

        // // Create 5 categories
        // $categories = [];
        // for ($i = 1; $i <= 5; $i++) {
        //     $categories[] = Category::create([
        //         'name' => $faker->words(2, true), // Generate random category name
        //         'description' => $faker->sentence(6), // Generate random description
        //     ]);
        // }

        // // Create 15 posts
        // for ($i = 1; $i <= 15; $i++) {
        //     $title = $faker->sentence(6); // Generate random title
        //     Post::create([
        //         'user_id' => 1, // Sesuaikan dengan ID user yang valid
        //         'category_id' => $categories[array_rand($categories)]->id, // Assign random category
        //         'title' => $title,
        //         'slug' => Str::slug($title),
        //         'image' => $faker->imageUrl(640, 480, 'education', true, 'Pendidikan'), // Generate random education-themed image URL
        //         'published_at' => Carbon::now(),
        //         'content' => $faker->paragraphs(3, true), // Generate random content in paragraphs
        //     ]);
        // }

           // Seed categories
           $categories = [
            [
                'id'    => 1,
                'name' => 'Kegiatan Akademik',
                'description' => 'Kegiatan yang berhubungan dengan pembelajaran dan akademik di sekolah dasar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 2,
                'name' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Kegiatan tambahan di luar jam pelajaran yang mendukung pengembangan siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 3,
                'name' => 'Kegiatan Sosial',
                'description' => 'Kegiatan yang bertujuan untuk membantu masyarakat atau lingkungan sekitar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 4,
                'name' => 'Kegiatan Keagamaan',
                'description' => 'Kegiatan yang berhubungan dengan pembinaan keimanan dan ibadah siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'    => 5,
                'name' => 'Kegiatan Seni dan Budaya',
                'description' => 'Kegiatan yang bertujuan untuk mengenalkan seni dan budaya kepada siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);

        // Seed posts
        $posts = [
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Lomba Olimpiade Matematika',
                'slug' => 'lomba-olimpiade-matematika',
                'image' => 'images/olimpiade-matematika.jpg',
                'published_at' => '2024-04-01',
                'content' => "Sekolah Dasar Harapan Bangsa kembali mengadakan Lomba Olimpiade Matematika tahun ini.\n\nAcara ini akan diikuti oleh siswa kelas 4 hingga kelas 6.\n\nTujuan dari kegiatan ini adalah untuk meningkatkan kemampuan logika dan analisis siswa.\n\nPara peserta akan diberikan soal-soal yang menantang dan membutuhkan kreativitas.\n\nSemoga lomba ini dapat memotivasi siswa untuk lebih berprestasi di bidang akademik.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Pelatihan Tari Tradisional',
                'slug' => 'pelatihan-tari-tradisional',
                'image' => 'images/tari-tradisional.jpg',
                'published_at' => '2024-05-10',
                'content' => "Sebagai bagian dari kegiatan ekstrakurikuler, sekolah mengadakan pelatihan tari tradisional.\n\nProgram ini diikuti oleh siswa kelas 3 hingga kelas 5 yang memiliki minat di bidang seni tari.\n\nTujuannya adalah melestarikan budaya Indonesia melalui seni tari.\n\nKegiatan ini juga melatih kekompakan dan kepercayaan diri siswa.\n\nHasil dari pelatihan akan ditampilkan dalam acara pentas seni sekolah.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Donasi untuk Korban Banjir',
                'slug' => 'donasi-untuk-korban-banjir',
                'image' => 'images/donasi-banjir.jpg',
                'published_at' => '2024-03-20',
                'content' => "Siswa Sekolah Dasar Harapan Bangsa turut serta dalam penggalangan dana untuk korban banjir.\n\nKegiatan ini melibatkan seluruh siswa dari kelas 1 hingga kelas 6.\n\nBantuan berupa sembako dan pakaian layak pakai berhasil dikumpulkan.\n\nKegiatan ini mengajarkan siswa untuk peduli terhadap sesama dan lingkungan sekitar.\n\nHasil donasi telah disalurkan kepada yang membutuhkan melalui organisasi resmi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'Kegiatan Pesantren Kilat',
                'slug' => 'kegiatan-pesantren-kilat',
                'image' => 'images/pesantren-kilat.jpg',
                'published_at' => '2024-03-15',
                'content' => "Untuk menyambut bulan Ramadhan, sekolah mengadakan kegiatan pesantren kilat.\n\nKegiatan ini berlangsung selama tiga hari dan diikuti oleh siswa kelas 5 dan 6.\n\nMateri yang disampaikan meliputi ilmu agama, hafalan doa, dan kegiatan ibadah bersama.\n\nTujuan kegiatan ini adalah meningkatkan keimanan dan ketaqwaan siswa.\n\nSemoga kegiatan ini dapat membawa manfaat bagi semua siswa yang ikut serta.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'title' => 'Pentas Seni dan Budaya',
                'slug' => 'pentas-seni-dan-budaya',
                'image' => 'images/pentas-seni.jpg',
                'published_at' => '2024-06-01',
                'content' => "Pentas Seni dan Budaya diadakan sebagai puncak acara akhir semester.\n\nSiswa dari semua kelas menampilkan berbagai pertunjukan seni, seperti drama, musik, dan tari.\n\nAcara ini dihadiri oleh orang tua siswa dan masyarakat sekitar.\n\nKegiatan ini bertujuan untuk mengembangkan bakat dan minat siswa di bidang seni.\n\nSemoga pentas ini dapat menjadi wadah kreativitas bagi siswa dan menghibur para penonton.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Workshop Menulis Cerita Pendek',
                'slug' => 'workshop-menulis-cerita-pendek',
                'image' => 'images/workshop-menulis.jpg',
                'published_at' => '2024-02-15',
                'content' => "Sekolah mengadakan workshop menulis cerita pendek untuk siswa kelas 4 hingga 6.\n\nWorkshop ini dipandu oleh penulis terkenal yang memberikan tips dan trik menulis.\n\nSiswa diajak untuk menggali imajinasi dan menuangkannya dalam bentuk cerita.\n\nHasil karya siswa akan dibukukan sebagai kenang-kenangan.\n\nKegiatan ini diharapkan dapat meningkatkan kemampuan literasi siswa.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'Latihan Dasar Kepemimpinan Siswa',
                'slug' => 'latihan-dasar-kepemimpinan-siswa',
                'image' => 'images/ldks.jpg',
                'published_at' => '2024-01-20',
                'content' => "Latihan Dasar Kepemimpinan Siswa (LDKS) diadakan untuk siswa kelas 5 dan 6.\n\nKegiatan ini bertujuan untuk melatih jiwa kepemimpinan dan tanggung jawab.\n\nPara siswa diberikan materi dan simulasi tentang bagaimana menjadi pemimpin yang baik.\n\nKegiatan ini diakhiri dengan sesi evaluasi dan pemberian sertifikat.\n\nKami berharap siswa dapat menerapkan ilmu yang didapatkan dalam kehidupan sehari-hari.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Kerja Bakti Bersama',
                'slug' => 'kerja-bakti-bersama',
                'image' => 'images/kerja-bakti.jpg',
                'published_at' => '2024-03-30',
                'content' => "Siswa dan guru bekerja sama dalam kegiatan kerja bakti membersihkan lingkungan sekolah.\n\nKegiatan ini melibatkan semua kelas dan bertujuan untuk menciptakan lingkungan yang bersih dan sehat.\n\nSiswa diajarkan pentingnya menjaga kebersihan sejak dini.\n\nKegiatan ini juga mempererat hubungan antara siswa dan guru.\n\nSemoga kebiasaan baik ini terus dilakukan di luar kegiatan sekolah.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'Peringatan Maulid Nabi',
                'slug' => 'peringatan-maulid-nabi',
                'image' => 'images/maulid-nabi.jpg',
                'published_at' => '2024-02-01',
                'content' => "Sekolah mengadakan peringatan Maulid Nabi Muhammad SAW dengan berbagai kegiatan.\n\nAcara dimulai dengan pembacaan ayat suci Al-Qur'an oleh siswa.\n\nDilanjutkan dengan ceramah agama yang disampaikan oleh ustaz terkemuka.\n\nTujuan dari kegiatan ini adalah meningkatkan cinta siswa kepada Nabi Muhammad SAW.\n\nSemoga acara ini memberikan inspirasi dan motivasi kepada siswa.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'category_id' => 5,
                'title' => 'Pameran Seni Rupa Siswa',
                'slug' => 'pameran-seni-rupa-siswa',
                'image' => 'images/pameran-seni.jpg',
                'published_at' => '2024-08-15',
                'content' => "Sekolah mengadakan pameran seni rupa hasil karya siswa dari kelas 1 hingga kelas 6.\n\nKarya yang dipamerkan meliputi lukisan, patung, dan kerajinan tangan.\n\nAcara ini bertujuan untuk mengapresiasi bakat seni siswa.\n\nOrang tua dan masyarakat sekitar diundang untuk menghadiri pameran ini.\n\nSemoga kegiatan ini dapat memotivasi siswa untuk terus berkarya.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
