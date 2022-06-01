<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kehadiran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'username' => 'unique:gurus',
            'password' => 'min:6'
        ],
        [
            'username.unique' => 'Username inputan harus unik dari database',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        Guru::create([
            'nuptk' => $request->nuptk,
            'nama_guru' => $request->nama_guru,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with("success", "Sukses, data guru $request->nama_guru berhasil ditambahkan.");
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
        return view('admin.siswa', compact('title', 'siswa'));
    }

    public function createSiswa(Request $request)
    {
        $request->validate([
            'nisn' => 'unique:siswas',
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama_siswa,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat
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
        $request->validate([
            'kode_kelas' => 'unique:kelas'
        ],
        [
            'kode_kelas.unique' => 'Kode kelas tidak boleh duplicate'
        ]);
        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas
        ]);
        return redirect()->back()->with('success', 'Data kelas baru berhasil ditambahkan');
    }

    public function updateKelas(Request $request, $id)
    {
        Kelas::find($id)->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas
        ]);
        return redirect()->back()->with('success', 'Data kelas berhasil diperbaharui');
    }
}
