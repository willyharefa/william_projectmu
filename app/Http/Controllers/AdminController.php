<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        return view('admin.dashboard-admin', compact('title'));
    }

    public function mapel()
    {
        $title = "Mata Pelajaran";
        $mapel = Mapel::all();
        return view('admin.mapel', compact('title', 'mapel'));
    }

    public function createMapel(Request $request)
    {
        $request->validate([
            'kode_mapel' => 'unique:mapels',
        ],
        [
            'kode_mapel.unique' => 'Kode mata pelajaran sudah ada, input kode lain' 
        ]);

        Mapel::create([
            'kode_mapel' => $request->kode_mapel,
            'name_mapel' => $request->name_mapel
        ]);
        return redirect()->back()->with("success", "Sukses, mapel $request->name_mapel berhasil ditambahkan.");
    }

    public function updateMapel(Request $request, $id)
    {
        Mapel::find($id)->update([
            'kode_mapel' => $request->new_kode_mapel,
            'name_mapel' => $request->new_name_mapel
        ]);
        return redirect()->back()->with("success", "Sukses, mapel $request->new_name_mapel berhasil diupdate.");
    }

    public function guru()
    {
        $title = "Data Guru";
        $guru = Guru::all();
        return view('admin.guru', compact('title', 'guru'));
    }

    public function createGuru(Request $request)
    {
        $validator = Validator::make(
            $request->validate([
                'username' => 'required|unique:gurus',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required',
                'email' => 'email:dns|unique:gurus',
                'nip' => 'unique:gurus|min:9',
                'nuptk' => 'unique:gurus|min:16'
            ]),
            [
                'username.unique' => 'Username harus unik !',
                'password.min' => 'Password minimal 6 karakter',
                'password.confirmed' => 'Password konfirmasi tidak sesuai',
                'email.unique' => 'Email harus unik !',
                'nip.unique' => 'NIP harus unik !',
                'nuptk.unique' => 'NUPTK harus unik !',
                'nuptk.min' => 'NUPTK minimal 16 digit',
                'nip.min' => 'NIP minimal 9 digit'
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
            Guru::create([
                'name' => $request->name,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
                'address' => $request->address,
                'nip' => $request->nip,
                'nuptk' => $request->nuptk,
                'grade' => $request->grade,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email
            ]);
            return redirect()->back()->with("success", "Sukses, data guru $request->nama_guru berhasil ditambahkan.");
        // }
        
    }

    public function updateGuru(Request $request, $id)
    {
        $request->validate([
            'username' => 'unique:gurus',
            'password' => 'min:6'
        ],
        [
            'username.unique' => 'Username inputan harus unik dari database',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        Guru::find($id)->update([
            'nuptk' => $request->new_nuptk,
            'nama_guru' => $request->nama_guru,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'username' => $request->username,
        ]);
        return redirect()->back()->with("success", "Sukses, data guru $request->nama_guru berhasil diperbaharui.");
    }

    // Kode program untuk menampilkan data siswa dan menambah data siswa
    public function siswa()
    {
        $title = "Data Siswa";
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('admin.siswa', compact('title', 'siswa', 'kelas'));
    }

    public function createSiswa(Request $request)
    {
        $message = [
            'nisn.unique' => 'NISN siswa harus unik !'
        ];

        $validator = Validator::make($request->validate([
            'nisn' => 'unique:siswas'
        ]), $message);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Siswa::create([
            'nisn' => $request->nisn,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'class' => $request->class
        ]);
        return redirect()->back()->with('success', 'Selamat, data siswa berhasil ditambahkan.');
    }

    public function updateSiswa(Request $request, $id)
    {
        Siswa::find($id)->update([
            'nisn' => $request->new_nisn,
            'nama' => $request->new_nama_siswa,
            'tgl_lahir' => $request->new_tgl_lahir,
            'jenis_kelamin' => $request->new_jenis_kelamin,
            'alamat' => $request->new_alamat
        ]);
        return redirect()->back()->with('success', 'Selamat, data siswa berhasil diperbaharui.');
    }

    // Kode program untuk menampilkan, menambah dan memperbaharui kelas
    public function kelas()
    {
        $title = "Data Kelas";
        $kelas = Kelas::all();
        return view('admin.kelas', compact('title', 'kelas'));
    }

    public function createKelas(Request $request)
    {
        Kelas::create([
            'class' => $request->name
        ]);
        return redirect()->back()->with('success', 'Data kelas baru berhasil ditambahkan');
    }

    public function updateKelas(Request $request, $id)
    {
        Kelas::find($id)->update([
            'class' => $request->new_name
        ]);
        return redirect()->back()->with('success', 'Data kelas berhasil diperbaharui');
    }

    public function absensiKelas($tag)
    {
        $kelas = Siswa::where('class', $tag)->get();
        $mapel = Mapel::all();
        $title = 'Absensi Data Kelas';
        $nameClass = $tag;
        return view('admin.data-kelas', compact('title', 'kelas', 'mapel', 'nameClass'));
    }

    public function createAbsent(Request $request)
    {
        // dd($request->name_student[1]);
        // dd($request);
        for ($i=0; $i < count($request->date_absent); $i++) { 
            Absensi::create([
                'name_student' => $request->name_student[$i],
                'name_class' => $request->name_class[$i],
                'mapel_id' => $request->mapel,
                'time_in' => $request->time_in[$i],
                'time_out' => $request->time_out[$i],
                'name_teacher' => $request->name_teacher,
                'date_absent' => $request->date_absent[$i]
            ]);
        }

        return redirect()->back()->with("success", "Selamat, data absensi berhasil di simpan.");
    } 

    public function dataAbsen($id, $tag)
    {
        $title = "Data Absensi Kelas";
        $dateNow = Carbon::now()->format('Y-m-d');
        // dd($dateNow);
        $tagName = $tag;
        $absensi = Absensi::where('mapel_id', $id)->where('name_class', $tag)->where('date_absent', $dateNow)->get();
        // dd($absensi);
        return view('admin.data-absen', compact('title', 'absensi', 'tagName'));
    }
}
