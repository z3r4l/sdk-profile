<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Announcement;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');

        // for ($i = 1; $i <= 15; $i++) {
        //     $title = $faker->sentence(3); // Generate random title
        //     Announcement::create([
        //         'user_id' => 1, // Sesuaikan dengan ID user yang valid
        //         'title' => $title,
        //         'slug' => Str::slug($title),
        //         'image' => $faker->imageUrl(640, 480, 'business', true, 'Faker'), // Generate random image URL
        //         'published_at' => Carbon::now(),
        //         'content' => $faker->paragraph(5), // Generate random content
        //     ]);
        // }


        $data = [
            [
                'user_id' => 1,
                'title' => 'Pengumuman Libur Akhir Tahun',
                'slug' => 'pengumuman-libur-akhir-tahun',
                'image' => 'images/libur-akhir-tahun.jpg',
                'published_at' => '2024-12-20',
                'content' => "Sehubungan dengan libur akhir tahun, sekolah akan diliburkan mulai tanggal 24 Desember hingga 2 Januari.\n\nSeluruh kegiatan belajar mengajar akan dilanjutkan kembali pada tanggal 3 Januari.\n\nKami berharap semua siswa dapat memanfaatkan liburan ini dengan baik.\n\nSelamat berlibur dan selamat tahun baru!\n\nUntuk informasi lebih lanjut, silakan hubungi bagian administrasi.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Ujian Tengah Semester',
                'slug' => 'pengumuman-ujian-tengah-semester',
                'image' => 'images/ujian-tengah-semester.jpg',
                'published_at' => '2024-10-01',
                'content' => "Ujian Tengah Semester akan dilaksanakan mulai tanggal 15 Oktober hingga 20 Oktober.\n\nSeluruh siswa diharapkan mempersiapkan diri dengan baik untuk menghadapi ujian.\n\nJadwal lengkap ujian telah dibagikan melalui wali kelas masing-masing.\n\nHarap datang tepat waktu sesuai jadwal yang telah ditentukan.\n\nSemoga sukses dalam menghadapi ujian ini.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Penerimaan Siswa Baru',
                'slug' => 'pengumuman-penerimaan-siswa-baru',
                'image' => 'images/penerimaan-siswa-baru.jpg',
                'published_at' => '2024-04-10',
                'content' => "Penerimaan siswa baru tahun ajaran 2024/2025 telah dibuka.\n\nPendaftaran dapat dilakukan mulai tanggal 15 April hingga 30 Mei.\n\nFormulir pendaftaran dapat diambil di kantor sekolah atau diunduh melalui situs resmi kami.\n\nPastikan semua dokumen persyaratan telah lengkap sebelum melakukan pendaftaran.\n\nInformasi lebih lanjut dapat dilihat di website sekolah.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Kegiatan Perkemahan',
                'slug' => 'pengumuman-kegiatan-perkemahan',
                'image' => 'images/kegiatan-perkemahan.jpg',
                'published_at' => '2024-05-20',
                'content' => "Sekolah akan mengadakan kegiatan perkemahan untuk siswa kelas 7 dan 8.\n\nKegiatan ini akan dilaksanakan pada tanggal 10 Juni hingga 12 Juni.\n\nSeluruh siswa yang ikut diharapkan membawa perlengkapan sesuai daftar yang telah diberikan.\n\nKegiatan ini bertujuan untuk melatih kemandirian dan kerjasama siswa.\n\nInformasi lebih lanjut dapat diperoleh melalui wali kelas masing-masing.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Lomba Kebersihan Kelas',
                'slug' => 'pengumuman-lomba-kebersihan-kelas',
                'image' => 'images/lomba-kebersihan.jpg',
                'published_at' => '2024-07-15',
                'content' => "Dalam rangka memperingati Hari Kemerdekaan, sekolah akan mengadakan lomba kebersihan kelas.\n\nPenilaian akan dilakukan mulai tanggal 17 Agustus hingga 19 Agustus.\n\nKriteria penilaian meliputi kebersihan, kerapian, dan kreativitas dekorasi.\n\nKelas yang memenangkan lomba akan mendapatkan hadiah menarik.\n\nSemangat dan mari tunjukkan kreativitas terbaik Anda!",                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Workshop Parenting',
                'slug' => 'pengumuman-workshop-parenting',
                'image' => 'images/workshop-parenting.jpg',
                'published_at' => '2024-03-01',
                'content' => "Sekolah akan mengadakan workshop parenting bagi para orang tua siswa.\n\nKegiatan ini akan dilaksanakan pada tanggal 15 Maret di aula sekolah.\n\nTopik yang akan dibahas adalah 'Pola Asuh Positif untuk Generasi Masa Depan'.\n\nPara orang tua diharapkan hadir tepat waktu dan membawa undangan.\n\nInformasi tambahan dapat menghubungi bagian tata usaha.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Jadwal Penerimaan Raport',
                'slug' => 'pengumuman-jadwal-penerimaan-raport',
                'image' => 'images/penerimaan-raport.jpg',
                'published_at' => '2024-06-25',
                'content' => "Penerimaan raport semester genap akan dilaksanakan pada tanggal 30 Juni.\n\nPara orang tua siswa diharapkan hadir pada jadwal yang telah ditentukan.\n\nRaport akan dibagikan di ruang kelas masing-masing siswa.\n\nPastikan tidak ada tunggakan administrasi sebelum penerimaan raport.\n\nKami tunggu kehadirannya, terima kasih.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Kegiatan Donor Darah',
                'slug' => 'pengumuman-kegiatan-donor-darah',
                'image' => 'images/donor-darah.jpg',
                'published_at' => '2024-08-05',
                'content' => "Sekolah bekerja sama dengan Palang Merah Indonesia akan mengadakan kegiatan donor darah.\n\nKegiatan ini akan berlangsung pada tanggal 12 Agustus di aula sekolah.\n\nSeluruh siswa, guru, dan orang tua yang memenuhi syarat diharapkan berpartisipasi.\n\nKegiatan ini bertujuan untuk membantu sesama yang membutuhkan.\n\nAyo, jadilah pahlawan dengan mendonorkan darah Anda!",                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Lomba Cerdas Cermat',
                'slug' => 'pengumuman-lomba-cerdas-cermat',
                'image' => 'images/cerdas-cermat.jpg',
                'published_at' => '2024-09-15',
                'content' => "Dalam rangka memperingati Hari Pendidikan Nasional, sekolah akan mengadakan lomba cerdas cermat.\n\nLomba ini akan dilaksanakan pada tanggal 30 September di ruang aula.\n\nSeluruh siswa yang berminat dapat mendaftar melalui wali kelas masing-masing.\n\nHadiah menarik telah disiapkan untuk para pemenang.\n\nMari tunjukkan kemampuan terbaikmu dalam ajang ini!",                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Pengumuman Peringatan Hari Guru',
                'slug' => 'pengumuman-peringatan-hari-guru',
                'image' => 'images/hari-guru.jpg',
                'published_at' => '2024-11-20',
                'content' => "Sekolah akan mengadakan peringatan Hari Guru pada tanggal 25 November.\n\nKegiatan akan dimulai dengan upacara bendera pada pukul 07.30.\n\nSeluruh siswa diharapkan mengenakan seragam lengkap dan datang tepat waktu.\n\nMari kita rayakan Hari Guru dengan penuh semangat dan penghormatan.\n\nUntuk informasi lebih lanjut, silakan hubungi bagian kesiswaan.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Announcement::create($data);
        DB::table('announcements')->insert($data);
    }
}
