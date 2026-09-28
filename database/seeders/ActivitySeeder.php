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
            ],
            [
                'title' => 'Pelatihan Laravel Framework Advanced',
                'description' => 'Mempelajari Eloquent ORM, Service Container, dan Security.',
                'activity_date' => '2026-11-01',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Workshop UI/UX Design System',
                'description' => 'Membuat design system dengan Figma.',
                'activity_date' => '2026-11-10',
                'category_id' => 1,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Seminar Web Quality',
                'description' => 'Pengenalan maintainability dan testing.',
                'activity_date' => '2026-10-12',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Evaluasi Proyek Tengah Semester',
                'description' => 'Presentasi progress aplikasi modul praktikum.',
                'activity_date' => '2026-10-25',
                'category_id' => 2,
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sidang Akhir Practicum',
                'description' => 'Pengujian hasil aplikasi modul 3.',
                'activity_date' => '2026-12-01',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Hackathon Pengembangan Aplikasi',
                'description' => 'Kompetisi membuat solusi digital dalam waktu 24 jam.',
                'activity_date' => '2026-10-18',
                'category_id' => 3,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'Gathering & Brainstorming Bebas',
                'description' => 'Diskusi santai anggota tim tanpa agenda formal.',
                'activity_date' => '2026-10-30',
                'category_id' => 2,
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
