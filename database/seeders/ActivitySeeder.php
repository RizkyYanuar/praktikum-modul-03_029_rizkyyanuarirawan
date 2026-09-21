<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::truncate();
        Activity::query()->insert([
            [
                'title' => 'Workshop Git Dasar',
                'description' => 'Latihan kolaborasi repository.',
                'activity_date' => '2026-10-05',
                'category' => 'Workshop',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Seminar Web Quality',
                'description' => 'Pengenalan maintainability dan testing.',
                'activity_date' => '2026-10-12',
                'category' => 'Seminar',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hackathon Pengembangan Aplikasi',
                'description' => 'Kompetisi membuat solusi digital dalam waktu 24 jam.',
                'activity_date' => '2026-10-18',
                'category' => 'Lomba',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Evaluasi Proyek Tengah Semester',
                'description' => 'Presentasi progress aplikasi modul praktikum.',
                'activity_date' => '2026-10-25',
                'category' => 'Evaluasi',
                'status' => 'Ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pelatihan Laravel Framework Advanced',
                'description' => 'Mempelajari Eloquent ORM, Service Container, dan Security.',
                'activity_date' => '2026-11-01',
                'category' => 'Pelatihan',
                'status' => 'Planned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
