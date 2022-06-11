<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan Jaya', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010002', 'name' => 'Ferdi', 'birthday' => '2000-03-24', 'gender' => 'Pria', 'class' => '1A']);
        Siswa::create(['nisn' => '990010003', 'name' => 'Mikha Tamba', 'birthday' => '2000-01-22', 'gender' => 'Perempuan', 'class' => '1A']);
        Siswa::create(['nisn' => '990010004', 'name' => 'Noni', 'birthday' => '2000-12-20', 'gender' => 'Perempuan', 'class' => '1A']);
        Siswa::create(['nisn' => '990010005', 'name' => 'Kusnaidi', 'birthday' => '2000-07-20', 'gender' => 'Pria', 'class' => '1A']);

        // KELAS 2A
        Siswa::create(['nisn' => '990010021', 'name' => 'Kusni', 'birthday' => '1999-01-20', 'gender' => 'Pria', 'class' => '2A']);
        Siswa::create(['nisn' => '990010022', 'name' => 'Virda', 'birthday' => '1999-04-05', 'gender' => 'Perempuan', 'class' => '2A']);
        Siswa::create(['nisn' => '990010023', 'name' => 'Florensia', 'birthday' => '1999-05-02', 'gender' => 'Perempuan', 'class' => '2A']);
        Siswa::create(['nisn' => '990010024', 'name' => 'Zahwa', 'birthday' => '1999-06-21', 'gender' => 'Perempuan', 'class' => '2A']);
        Siswa::create(['nisn' => '990010025', 'name' => 'Kevin', 'birthday' => '1999-07-22', 'gender' => 'Pria', 'class' => '2A']);


        // KELAS 2B
        Siswa::create(['nisn' => '990010031', 'name' => 'Kumparan', 'birthday' => '1998-06-20', 'gender' => 'Pria', 'class' => '2B']);
        Siswa::create(['nisn' => '990010032', 'name' => 'Stevent', 'birthday' => '1999-07-21', 'gender' => 'Pria', 'class' => '2B']);
        Siswa::create(['nisn' => '990010033', 'name' => 'Puspa', 'birthday' => '1999-03-22', 'gender' => 'Perempuan', 'class' => '2B']);
        Siswa::create(['nisn' => '990010034', 'name' => 'Yulvia', 'birthday' => '1999-11-10', 'gender' => 'Perempuan', 'class' => '2B']);
        Siswa::create(['nisn' => '990010035', 'name' => 'Fabio', 'birthday' => '1999-08-02', 'gender' => 'Pria', 'class' => '2B']);

        // KELAS 3A
        Siswa::create(['nisn' => '990010041', 'name' => 'Messi', 'birthday' => '1998-01-12', 'gender' => 'Pria', 'class' => '3A']);
        Siswa::create(['nisn' => '990010042', 'name' => 'Ronaldo', 'birthday' => '1998-07-07', 'gender' => 'Pria', 'class' => '3A']);
        Siswa::create(['nisn' => '990010043', 'name' => 'Mourinho', 'birthday' => '1998-07-27', 'gender' => 'Pria', 'class' => '3A']);
        Siswa::create(['nisn' => '990010044', 'name' => 'Rebecca', 'birthday' => '1998-05-02', 'gender' => 'Perempuan', 'class' => '3A']);
        Siswa::create(['nisn' => '990010045', 'name' => 'Hilda', 'birthday' => '1999-01-20', 'gender' => 'Perempuan', 'class' => '3A']);

        // KELAS 4A
        Siswa::create(['nisn' => '990010051', 'name' => 'Cortes', 'birthday' => '1997-01-01', 'gender' => 'Pria', 'class' => '4A']);
        Siswa::create(['nisn' => '990010052', 'name' => 'Filipus', 'birthday' => '1997-01-02', 'gender' => 'Pria', 'class' => '4A']);
        Siswa::create(['nisn' => '990010053', 'name' => 'Kambuaya', 'birthday' => '1997-11-20', 'gender' => 'Pria', 'class' => '4A']);
        Siswa::create(['nisn' => '990010054', 'name' => 'Lofren', 'birthday' => '1998-01-23', 'gender' => 'Perempuan', 'class' => '4A']);
        Siswa::create(['nisn' => '990010055', 'name' => 'Tanaka', 'birthday' => '1997-07-27', 'gender' => 'Perempuan', 'class' => '4A']);

        // KELAS 4B
        Siswa::create(['nisn' => '990010061', 'name' => 'Pedri', 'birthday' => '1997-11-22', 'gender' => 'Pria', 'class' => '4B']);
        Siswa::create(['nisn' => '990010062', 'name' => 'Pedro', 'birthday' => '1997-01-22', 'gender' => 'Pria', 'class' => '4B']);
        Siswa::create(['nisn' => '990010063', 'name' => 'Siska', 'birthday' => '1996-01-29', 'gender' => 'Perempuan', 'class' => '4B']);
        Siswa::create(['nisn' => '990010064', 'name' => 'Mia Malkova', 'birthday' => '1997-01-30', 'gender' => 'Perempuan', 'class' => '4B']);
        Siswa::create(['nisn' => '990010065', 'name' => 'Boateng', 'birthday' => '1997-01-20', 'gender' => 'Pria', 'class' => '4B']);

        // KELAS 5A
        Siswa::create(['nisn' => '990010071', 'name' => 'Sukaisi', 'birthday' => '1996-09-20', 'gender' => 'Perempuan', 'class' => '5A']);
        Siswa::create(['nisn' => '990010072', 'name' => 'Elvis', 'birthday' => '1997-08-25', 'gender' => 'Pria', 'class' => '5A']);
        Siswa::create(['nisn' => '990010073', 'name' => 'Kosta', 'birthday' => '1996-08-28', 'gender' => 'Pria', 'class' => '5A']);
        Siswa::create(['nisn' => '990010074', 'name' => 'Luffy', 'birthday' => '1996-01-21', 'gender' => 'Pria', 'class' => '5A']);
        Siswa::create(['nisn' => '990010075', 'name' => 'Dragon', 'birthday' => '1996-01-10', 'gender' => 'Pria', 'class' => '5A']);

        // KELAS 6A
        Siswa::create(['nisn' => '990010081', 'name' => 'Toni Kross', 'birthday' => '1995-01-30', 'gender' => 'Pria', 'class' => '6A']);
        Siswa::create(['nisn' => '990010082', 'name' => 'Sergio Bors', 'birthday' => '1995-01-22', 'gender' => 'Pria', 'class' => '6A']);
        Siswa::create(['nisn' => '990010083', 'name' => 'Hermes', 'birthday' => '1996-02-10', 'gender' => 'Pria', 'class' => '6A']);
        Siswa::create(['nisn' => '990010084', 'name' => 'Trafalgar', 'birthday' => '1996-06-20', 'gender' => 'Pria', 'class' => '6A']);
        Siswa::create(['nisn' => '990010085', 'name' => 'Nami', 'birthday' => '1995-10-20', 'gender' => 'Perempuan', 'class' => '6A']);

        Kelas::create(['class' => '1A']);
        Kelas::create(['class' => '2A']);
        Kelas::create(['class' => '2B']);
        Kelas::create(['class' => '3A']);
        Kelas::create(['class' => '4A']);
        Kelas::create(['class' => '4B']);
        Kelas::create(['class' => '5A']);
        Kelas::create(['class' => '6A']);

        // $table->string('name');
        // $table->date('birthday');
        // $table->enum('gender', ['Pria', 'Perempuan']);
        // $table->string('address');
        // $table->string('nip')->unique();
        // $table->string('nuptk')->unique();
        // $table->string('grade');
        // $table->string('username')->unique();
        // $table->string('password');
        // $table->string('email')->unique();
        // $table->timestamps();


        Guru::create(['name' => 'Siti Nurbayar, S.Pd', 'birthday' => '1980-01-01', 'gender' => 'Perempuan', 'address' => 'Jl. Cempaka', 'nip' => '1800000x16', 'nuptk' => 'x9', 'grade' => 'Kepala Sekolah', 'username' => 'siti.nurbayar', 'password' => '123123', 'email' => 'siti.bayar@gmail.com']);

        
        Admin::create(['name' => 'William', 'username' => 'admin', 'password' => Hash::make('admin')]);


    }
}
