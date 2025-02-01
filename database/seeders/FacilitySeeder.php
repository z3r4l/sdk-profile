<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');
        //    // Create Facilities
        //    $facilities = [
        //     'Ruang Kelas',
        //     'Perpustakaan',
        //     'Ruang Komputer',
        //     'Ruang Keterampilan',
        //     'Ruang Science Centre',
        //     'Ruang Agama Budha',
        //     'Ruang Agama Kristen',
        //     'Ruang Bendahara',
        // ];

        // foreach ($facilities as $facility) {
        //     $imagePath = $faker->image(
        //         storage_path('app/public/'), // Direktori penyimpanan
        //         640, // Lebar gambar
        //         480, // Tinggi gambar
        //         'building', // Tema gambar
        //         false // Return hanya nama file, bukan URL penuh
        //     );
        //     Facility::create([
        //         'user_id' => 1, // Sesuaikan dengan ID user yang valid
        //         'title' => $facility,
        //         'slug' => Str::slug($facility),
        //         'image' => '/' . $imagePath,
        //         'published_at' => Carbon::now(),
        //         'content' => $faker->paragraphs(2, true), // Generate random content
        //     ]);
        // }

        $facilities = [
            [
                'user_id' => 1,
                'title' => 'Ruang Kelas',
                'slug' => 'ruang-kelas',
                'image' => 'images/ruang-kelas.jpg',
                'published_at' => '2024-01-01',
                'content' => "Ruang kelas di Sekolah Dasar Harapan Bangsa dirancang untuk menciptakan suasana belajar yang nyaman dan kondusif.\n\nSetiap ruang kelas dilengkapi dengan meja dan kursi yang ergonomis untuk mendukung kenyamanan siswa.\n\nPapan tulis interaktif juga tersedia untuk mendukung proses pembelajaran berbasis teknologi.\n\nVentilasi dan pencahayaan yang baik memastikan ruang kelas sehat dan terang sepanjang hari.\n\nRuang kelas ini menjadi tempat utama siswa menggali ilmu dan mengembangkan keterampilan mereka.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Perpustakaan',
                'slug' => 'perpustakaan',
                'image' => 'images/perpustakaan.jpg',
                'published_at' => '2024-01-02',
                'content' => "Perpustakaan sekolah menyediakan berbagai koleksi buku untuk mendukung pembelajaran siswa.\n\nTerdapat buku pelajaran, buku cerita, dan referensi lainnya yang dapat diakses oleh siswa dari semua kelas.\n\nRuang perpustakaan dilengkapi dengan meja baca yang nyaman dan area khusus untuk diskusi kelompok.\n\nJam operasional perpustakaan disesuaikan dengan jadwal sekolah untuk memastikan akses yang maksimal.\n\nDengan fasilitas ini, siswa diharapkan dapat menumbuhkan kebiasaan membaca sejak dini.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Komputer',
                'slug' => 'ruang-komputer',
                'image' => 'images/ruang-komputer.jpg',
                'published_at' => '2024-01-03',
                'content' => "Ruang komputer di sekolah kami dilengkapi dengan perangkat komputer modern dan akses internet.\n\nSetiap siswa diberikan kesempatan untuk belajar teknologi informasi dan komunikasi.\n\nGuru pendamping selalu siap membantu siswa dalam memahami penggunaan perangkat lunak.\n\nRuang ini juga digunakan untuk pelatihan keterampilan teknologi yang relevan dengan kebutuhan masa depan.\n\nDengan adanya ruang komputer, siswa dapat lebih siap menghadapi tantangan di era digital.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Keterampilan',
                'slug' => 'ruang-keterampilan',
                'image' => 'images/ruang-keterampilan.jpg',
                'published_at' => '2024-01-04',
                'content' => "Ruang keterampilan di sekolah dirancang untuk mendukung pembelajaran praktis.\n\nSiswa dapat belajar berbagai keterampilan, seperti menjahit, memasak, dan kerajinan tangan.\n\nFasilitas ini dilengkapi dengan peralatan modern yang aman digunakan oleh siswa.\n\nSetiap kegiatan keterampilan diawasi oleh guru yang berpengalaman di bidangnya.\n\nRuang ini bertujuan untuk mengembangkan kreativitas dan keterampilan hidup siswa.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Science Centre',
                'slug' => 'ruang-science-centre',
                'image' => 'images/ruang-science-centre.jpg',
                'published_at' => '2024-01-05',
                'content' => "Ruang Science Centre menjadi pusat pembelajaran sains di sekolah.\n\nRuang ini dilengkapi dengan alat peraga dan bahan praktikum yang lengkap.\n\nSiswa diajak untuk melakukan berbagai eksperimen yang mendukung pemahaman teori sains.\n\nGuru sains selalu hadir untuk membimbing dan memastikan keamanan selama praktikum.\n\nDengan fasilitas ini, siswa dapat mengembangkan minat dan bakat di bidang sains.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Agama Budha',
                'slug' => 'ruang-agama-budha',
                'image' => 'images/ruang-agama-budha.jpg',
                'published_at' => '2024-01-06',
                'content' => "Ruang Agama Budha di sekolah kami menyediakan tempat yang tenang untuk kegiatan keagamaan.\n\nRuang ini dilengkapi dengan altar dan buku-buku ajaran Budha untuk pembelajaran siswa.\n\nGuru agama Budha memimpin kegiatan ibadah dan diskusi keagamaan di ruangan ini.\n\nSiswa diajarkan nilai-nilai kedamaian, toleransi, dan kebijaksanaan.\n\nFasilitas ini mendukung siswa dalam memperdalam pemahaman ajaran agama mereka.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Agama Kristen',
                'slug' => 'ruang-agama-kristen',
                'image' => 'images/ruang-agama-kristen.jpg',
                'published_at' => '2024-01-07',
                'content' => "Ruang Agama Kristen menjadi tempat ibadah dan pembelajaran agama bagi siswa Kristen.\n\nRuang ini dilengkapi dengan fasilitas seperti Alkitab, salib, dan perlengkapan ibadah lainnya.\n\nGuru agama Kristen memberikan bimbingan dan pelajaran mengenai nilai-nilai Kristiani.\n\nKegiatan di ruangan ini meliputi doa bersama, diskusi, dan penyampaian firman.\n\nDengan fasilitas ini, siswa dapat memperdalam iman dan menjalani ajaran Kristiani dengan baik.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Ruang Bendahara',
                'slug' => 'ruang-bendahara',
                'image' => 'images/ruang-bendahara.jpg',
                'published_at' => '2024-01-08',
                'content' => "Ruang Bendahara adalah tempat pengelolaan administrasi keuangan sekolah.\n\nRuang ini dilengkapi dengan peralatan seperti komputer, printer, dan brankas untuk keamanan data.\n\nProses pembayaran SPP dan administrasi lainnya dilakukan di ruangan ini.\n\nStaf bendahara memastikan semua transaksi keuangan berjalan transparan dan akuntabel.\n\nFasilitas ini mendukung kelancaran operasional keuangan sekolah.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('facilities')->insert($facilities);
    }
}
