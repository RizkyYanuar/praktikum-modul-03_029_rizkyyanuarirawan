<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::truncate();

        Activity::query()->insert([
            [
                'title' => 'Workshop Git Dasar',
                'description' => 'Latihan kolaborasi repository.',
                'activity_date' => '2026-10-05',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '1'
            ],
            [
                'title' => 'Pelatihan Laravel Framework Advanced',
                'description' => 'Mempelajari Eloquent ORM, Service Container, dan Security.',
                'activity_date' => '2026-11-01',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '2'

            ],
            [
                'title' => 'Workshop UI/UX Design System',
                'description' => 'Membuat design system dengan Figma.',
                'activity_date' => '2026-11-10',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '3'

            ],
            [
                'title' => 'Bootcamp React.js Dasar',
                'description' => 'Membangun aplikasi web interaktif dengan React hooks.',
                'activity_date' => '2026-11-15',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '4'

            ],
            [
                'title' => 'Workshop Tailwind CSS & Responsive Design',
                'description' => 'Teknik slicing UI cepat menggunakan utilitas Tailwind.',
                'activity_date' => '2026-11-22',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '5'
            ],
            [
                'title' => 'Pelatihan Database Optimization',
                'description' => 'Belajar indexing, query profiling, dan caching di MySQL.',
                'activity_date' => '2026-12-05',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '6'

            ],
            [
                'title' => 'Workshop Docker untuk Pemula',
                'description' => 'Kontainerisasi aplikasi PHP dan deployment lokal.',
                'activity_date' => '2026-12-12',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '7'
            ],

            [
                'title' => 'Seminar Web Quality',
                'description' => 'Pengenalan maintainability dan testing.',
                'activity_date' => '2026-10-12',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '8'
            ],
            [
                'title' => 'Evaluasi Proyek Tengah Semester',
                'description' => 'Presentasi progress aplikasi modul praktikum.',
                'activity_date' => '2026-10-25',
                'category_id' => 2,
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '9'
            ],
            [
                'title' => 'Gathering & Brainstorming Bebas',
                'description' => 'Diskusi santai anggota tim tanpa agenda formal.',
                'activity_date' => '2026-10-30',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '10'
            ],
            [
                'title' => 'Sidang Akhir Practicum',
                'description' => 'Pengujian hasil aplikasi modul 3.',
                'activity_date' => '2026-12-01',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '11'
            ],
            [
                'title' => 'Rapat Pleno Kurikulum Baru',
                'description' => 'Pembahasan integrasi materi AI ke modul praktikum.',
                'activity_date' => '2026-11-05',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '12'
            ],
            [
                'title' => 'Review Kode Bersama (Code Review)',
                'description' => 'Evaluasi standar penulisan kode tim pengembang.',
                'activity_date' => '2026-11-18',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),

                'code' => '13'
            ],
            [
                'title' => 'Audit Keamanan Sistem Informasi',
                'description' => 'Pengecekan celah keamanan pada server praktikum.',
                'activity_date' => '2026-11-28',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '14'
            ],
            [
                'title' => 'Penyusunan Laporan Akhir Tahun',
                'description' => 'Rekapitulasi seluruh kegiatan laboratorium.',
                'activity_date' => '2026-12-20',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '15'
            ],

            [
                'title' => 'Hackathon Pengembangan Aplikasi',
                'description' => 'Kompetisi membuat solusi digital dalam waktu 24 jam.',
                'activity_date' => '2026-10-18',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '16'
            ],
            [
                'title' => 'Capture The Flag (CTF) Cybersecurity',
                'description' => 'Kompetisi peretasan etis dan keamanan jaringan.',
                'activity_date' => '2026-10-22',
                'category_id' => 3,
                'status' => 'Finished',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '17'
            ],
            [
                'title' => 'Pameran Karya Inovasi Teknologi',
                'description' => 'Showcase produk digital hasil riset mahasiswa.',
                'activity_date' => '2026-11-08',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '18'
            ],
            [
                'title' => 'Lomba UI/UX Design Tingkat Nasional',
                'description' => 'Kompetisi perancangan antarmuka aplikasi ramah disabilitas.',
                'activity_date' => '2026-11-25',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '19'
            ],
            [
                'title' => 'Tech Talk: Tren AI di Dunia Industri',
                'description' => 'Webinar interaktif bersama praktisi AI dari startup unicorn.',
                'activity_date' => '2026-12-10',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '20'
            ],
            [
                'title' => 'Open Source Contribution Day',
                'description' => 'Gerakan bersama berkontribusi pada proyek open-source global.',
                'activity_date' => '2026-12-18',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
                'code' => '21'
            ],
        ]);
    }
}
