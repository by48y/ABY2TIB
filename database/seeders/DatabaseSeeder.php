<?php

namespace Database\Seeders;

use App\Models\Pengalaman;
use App\Models\Portofolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Skill::updateOrCreate(['nama' => 'Laravel'], ['level' => 85]);
        Skill::updateOrCreate(['nama' => 'PHP & MySQL'], ['level' => 80]);
        Skill::updateOrCreate(['nama' => 'Bootstrap & UI'], ['level' => 78]);
        Skill::updateOrCreate(['nama' => 'JavaScript'], ['level' => 70]);

        Pengalaman::updateOrCreate(
            ['posisi' => 'Mahasiswa Informatika', 'instansi' => 'Universitas'],
            ['periode' => '2022 — Sekarang', 'deskripsi' => 'Mempelajari rekayasa perangkat lunak, basis data, dan pengembangan aplikasi web.']
        );

        Portofolio::updateOrCreate(
            ['judul' => 'CV & Portofolio Dinamis'],
            [
                'kategori' => 'Web Development',
                'deskripsi' => 'Website CV yang datanya dapat dikelola melalui dashboard CRUD.',
                'teknologi' => 'Laravel, PHP, MySQL, Bootstrap',
                'tahun' => 2026,
            ]
        );
    }
}
