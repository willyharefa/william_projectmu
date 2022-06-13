<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Kelas;
use App\Models\Mapel;
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
        
        Siswa::create(['nisn' => '990010001', 'name' => 'Ferdinan Jaya', 'birthday' => '2000-01-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '1A']);
        Siswa::create(['nisn' => '990010002', 'name' => 'Ferdi', 'birthday' => '2000-03-24', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '1A']);
        Siswa::create(['nisn' => '990010003', 'name' => 'Mikha Tamba', 'birthday' => '2000-01-22', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '1A']);
        Siswa::create(['nisn' => '990010004', 'name' => 'Noni', 'birthday' => '2000-12-20', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '1A']);
        Siswa::create(['nisn' => '990010005', 'name' => 'Kusnaidi', 'birthday' => '2000-07-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '1A']);

        // KELAS 2A
        Siswa::create(['nisn' => '990010021', 'name' => 'Kusni', 'birthday' => '1999-01-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '2A']);
        Siswa::create(['nisn' => '990010022', 'name' => 'Virda', 'birthday' => '1999-04-05', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '2A']);
        Siswa::create(['nisn' => '990010023', 'name' => 'Florensia', 'birthday' => '1999-05-02', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '2A']);
        Siswa::create(['nisn' => '990010024', 'name' => 'Zahwa', 'birthday' => '1999-06-21', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '2A']);
        Siswa::create(['nisn' => '990010025', 'name' => 'Kevin', 'birthday' => '1999-07-22', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '2A']);


        // KELAS 2B
        Siswa::create(['nisn' => '990010031', 'name' => 'Kumparan', 'birthday' => '1998-06-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '2B']);
        Siswa::create(['nisn' => '990010032', 'name' => 'Stevent', 'birthday' => '1999-07-21', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '2B']);
        Siswa::create(['nisn' => '990010033', 'name' => 'Puspa', 'birthday' => '1999-03-22', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '2B']);
        Siswa::create(['nisn' => '990010034', 'name' => 'Yulvia', 'birthday' => '1999-11-10', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '2B']);
        Siswa::create(['nisn' => '990010035', 'name' => 'Fabio', 'birthday' => '1999-08-02', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '2B']);

        // KELAS 3A
        Siswa::create(['nisn' => '990010041', 'name' => 'Messi', 'birthday' => '1998-01-12', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '3A']);
        Siswa::create(['nisn' => '990010042', 'name' => 'Ronaldo', 'birthday' => '1998-07-07', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '3A']);
        Siswa::create(['nisn' => '990010043', 'name' => 'Mourinho', 'birthday' => '1998-07-27', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '3A']);
        Siswa::create(['nisn' => '990010044', 'name' => 'Rebecca', 'birthday' => '1998-05-02', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '3A']);
        Siswa::create(['nisn' => '990010045', 'name' => 'Hilda', 'birthday' => '1999-01-20', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '3A']);

        // KELAS 4A
        Siswa::create(['nisn' => '990010051', 'name' => 'Cortes', 'birthday' => '1997-01-01', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4A']);
        Siswa::create(['nisn' => '990010052', 'name' => 'Filipus', 'birthday' => '1997-01-02', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4A']);
        Siswa::create(['nisn' => '990010053', 'name' => 'Kambuaya', 'birthday' => '1997-11-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4A']);
        Siswa::create(['nisn' => '990010054', 'name' => 'Lofren', 'birthday' => '1998-01-23', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '4A']);
        Siswa::create(['nisn' => '990010055', 'name' => 'Tanaka', 'birthday' => '1997-07-27', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '4A']);

        // KELAS 4B
        Siswa::create(['nisn' => '990010061', 'name' => 'Pedri', 'birthday' => '1997-11-22', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4B']);
        Siswa::create(['nisn' => '990010062', 'name' => 'Pedro', 'birthday' => '1997-01-22', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4B']);
        Siswa::create(['nisn' => '990010063', 'name' => 'Siska', 'birthday' => '1996-01-29', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '4B']);
        Siswa::create(['nisn' => '990010064', 'name' => 'Mia Malkova', 'birthday' => '1997-01-30', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '4B']);
        Siswa::create(['nisn' => '990010065', 'name' => 'Boateng', 'birthday' => '1997-01-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '4B']);

        // KELAS 5A
        Siswa::create(['nisn' => '990010071', 'name' => 'Sukaisi', 'birthday' => '1996-09-20', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '5A']);
        Siswa::create(['nisn' => '990010072', 'name' => 'Elvis', 'birthday' => '1997-08-25', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '5A']);
        Siswa::create(['nisn' => '990010073', 'name' => 'Kosta', 'birthday' => '1996-08-28', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '5A']);
        Siswa::create(['nisn' => '990010074', 'name' => 'Luffy', 'birthday' => '1996-01-21', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '5A']);
        Siswa::create(['nisn' => '990010075', 'name' => 'Dragon', 'birthday' => '1996-01-10', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '5A']);

        // KELAS 6A
        Siswa::create(['nisn' => '990010081', 'name' => 'Toni Kross', 'birthday' => '1995-01-30', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '6A']);
        Siswa::create(['nisn' => '990010082', 'name' => 'Sergio Bors', 'birthday' => '1995-01-22', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '6A']);
        Siswa::create(['nisn' => '990010083', 'name' => 'Hermes', 'birthday' => '1996-02-10', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '6A']);
        Siswa::create(['nisn' => '990010084', 'name' => 'Trafalgar', 'birthday' => '1996-06-20', 'gender' => 'Pria', 'address' => 'Jl.Durian', 'class' => '6A']);
        Siswa::create(['nisn' => '990010085', 'name' => 'Nami', 'birthday' => '1995-10-20', 'gender' => 'Perempuan', 'address' => 'Jl.Durian', 'class' => '6A']);

        Kelas::create(['name' => '1A']);
        Kelas::create(['name' => '2A']);
        Kelas::create(['name' => '2B']);
        Kelas::create(['name' => '3A']);
        Kelas::create(['name' => '4A']);
        Kelas::create(['name' => '4B']);
        Kelas::create(['name' => '5A']);
        Kelas::create(['name' => '6A']);

        Guru::create(['name' => 'Siti Nurbayar, S.Pd', 'birthday' => '1980-01-01', 'gender' => 'Perempuan', 'address' => 'Jl. Cempaka', 'nip' => '1800000276897616', 'nuptk' => '125678978', 'grade' => 'Kepala Sekolah', 'username' => 'siti.nurbayar', 'password' => Hash::make('123123'), 'email' => 'siti.bayar@gmail.com']);
        Guru::create(['name' => 'Khodijah, S.Pd', 'birthday' => '1979-12-01', 'gender' => 'Perempuan', 'address' => 'Jl. Kurnia', 'nip' => '1800000012324123', 'nuptk' => '124678354', 'grade' => 'Wali Kelas', 'username' => 'khodijah01', 'password' => Hash::make('123123'), 'email' => 'khodijah@gmail.com']);
        Guru::create(['name' => 'Warisman, S.Pd', 'birthday' => '1976-11-21', 'gender' => 'Pria', 'address' => 'Jl. Kartama', 'nip' => '1800000028493846', 'nuptk' => '120985944', 'grade' => 'Wali Kelas', 'username' => 'waris11', 'password' => Hash::make('123123'), 'email' => 'waris@gmail.com']);
        Guru::create(['name' => 'Joko Anwar, S.Pd', 'birthday' => '1980-07-01', 'gender' => 'Pria', 'address' => 'Jl. Rambutan', 'nip' => '1800000008372354', 'nuptk' => '126584930', 'grade' => 'Wali Kelas', 'username' => 'jokoan80', 'password' => Hash::make('123123'), 'email' => 'joko.an@gmail.com']);
        Guru::create(['name' => 'Jordan, S.Pd', 'birthday' => '1980-05-05', 'gender' => 'Pria', 'address' => 'Jl. Kempas', 'nip' => '1800000918934567', 'nuptk' => '129467589', 'grade' => 'Wali Kelas', 'username' => 'jordan05', 'password' => Hash::make('123123'), 'email' => 'jordan@gmail.com']);
        Guru::create(['name' => 'Pince, S.Kom', 'birthday' => '1980-11-11', 'gender' => 'Pria', 'address' => 'Jl. London', 'nip' => '1800000169738456', 'nuptk' => '123564789', 'grade' => 'Wali Kelas', 'username' => 'pince11', 'password' => Hash::make('123123'), 'email' => 'pince@gmail.com']);
        Guru::create(['name' => 'Kurniawan, S.Pd', 'birthday' => '1970-01-01', 'gender' => 'Pria', 'address' => 'Jl. Bejo', 'nip' => '1800000169465835', 'nuptk' => '193846734', 'grade' => 'Wali Kelas', 'username' => 'kurni01', 'password' => Hash::make('123123'), 'email' => 'kurniawan@gmail.com']);
        Guru::create(['name' => 'Fabinho, S.Pd', 'birthday' => '1980-08-01', 'gender' => 'Pria', 'address' => 'Jl. Pepaya', 'nip' => '1800000168596785', 'nuptk' => '129576845', 'grade' => 'Wali Kelas', 'username' => 'Fabio08', 'password' => Hash::make('123123'), 'email' => 'fabinho08@gmail.com']);
        Guru::create(['name' => 'Nurlela, S.Pd', 'birthday' => '1980-08-18', 'gender' => 'Perempuan', 'address' => 'Jl. Cempaka Putih', 'nip' => '1800000169876577', 'nuptk' => '123923467', 'grade' => 'Wali Kelas', 'username' => 'nurlela08', 'password' => Hash::make('123123'), 'email' => 'nurlela@gmail.com']);
        Guru::create(['name' => 'Nuryani, S.Pd', 'birthday' => '1980-12-11', 'gender' => 'Perempuan', 'address' => 'Jl. Kortes', 'nip' => '1800000168946578', 'nuptk' => '187238978', 'grade' => 'Guru', 'username' => 'nuryani12', 'password' => Hash::make('123123'), 'email' => 'nuryani@gmail.com']);
        Guru::create(['name' => 'Siti Badriah, S.Pd', 'birthday' => '1980-06-06', 'gender' => 'Perempuan', 'address' => 'Jl. Kompas', 'nip' => '1800000169378498', 'nuptk' => '128947839', 'grade' => 'Guru', 'username' => 'sitibad06', 'password' => Hash::make('123123'), 'email' => 'siti.badriah@gmail.com']);
        Guru::create(['name' => 'Tono Soecipto, S.Pd', 'birthday' => '1980-11-11', 'gender' => 'Pria', 'address' => 'Jl. Kembar', 'nip' => '1800000389367816', 'nuptk' => '128497679', 'grade' => 'Guru', 'username' => 'tonocipto1', 'password' => Hash::make('123123'), 'email' => 'tonosoe@gmail.com']);
        Guru::create(['name' => 'Vincent, S.Pd', 'birthday' => '1980-12-11', 'gender' => 'Pria', 'address' => 'Jl. Cempaka', 'nip' => '1800000827896716', 'nuptk' => '129758865', 'grade' => 'Guru', 'username' => 'vincent01', 'password' => Hash::make('123123'), 'email' => 'vincent01@gmail.com']);
        Guru::create(['name' => 'Yenny Komala, S.Pd', 'birthday' => '1982-01-15', 'gender' => 'Perempuan', 'address' => 'Jl. Kulim', 'nip' => '1800000785036716', 'nuptk' => '128950378', 'grade' => 'Guru', 'username' => 'yenny01', 'password' => Hash::make('123123'), 'email' => 'yennykom@gmail.com']);
        Guru::create(['name' => 'Barita, S.Kom', 'birthday' => '1985-07-06', 'gender' => 'Pria', 'address' => 'Jl. Kutilang', 'nip' => '1800000164694087', 'nuptk' => '127589678', 'grade' => 'Guru', 'username' => 'barita76', 'password' => Hash::make('123123'), 'email' => 'barita@gmail.com']);
        Guru::create(['name' => 'Arief Alfiansyah, S.Pd', 'birthday' => '1988-07-11', 'gender' => 'Pria', 'address' => 'Jl. Kodratnya', 'nip' => '1800000402745616', 'nuptk' => '127593765', 'grade' => 'Guru', 'username' => 'ariefalfi07', 'password' => Hash::make('123123'), 'email' => 'ariefal@gmail.com']);

        Mapel::create(['name' => 'Bahasa Indonesia']);
        Mapel::create(['name' => 'Bahasa Inggris']);
        Mapel::create(['name' => 'Seni Budaya']);
        Mapel::create(['name' => 'Matematika']);
        Mapel::create(['name' => 'PPKn']);
        Mapel::create(['name' => 'IPA']);
        Mapel::create(['name' => 'IPS']);
        Mapel::create(['name' => 'Pendidikan Agama']);
        Mapel::create(['name' => 'PJOK']);
        Mapel::create(['name' => 'TIK']);
        
        Admin::create(['name' => 'William', 'username' => 'admin', 'password' => Hash::make('admin')]);


    }
}
