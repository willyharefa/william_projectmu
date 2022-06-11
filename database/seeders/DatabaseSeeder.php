<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
                        //NISN   | Nama siswa    |   Tanggal lahir    | Jenis kelamin     | alamat   | Kelas
                        // usahakan nisn beda
                        // kelas isi 5 siswa, harus di mulai dari HURUF BESAR MISAL :1A, 2A,2B, 3A, 4A,4B,5A,6A
        // UNTUK KELAS 1A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 2A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);


        // KELAS 2B
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 3A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 4A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 4B
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 5A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 6A
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
    }
}
