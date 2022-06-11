<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Kehadiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    // Kode program untuk menampilkan, menambah dan memperbaharui Absensi
    public function absensi()
    {
        $title = "Data Absensi";
        $data_siswa = Siswa::all();
        $data_kelas = Kelas::all();
        $data_mapel = Mapel::all();
        return view('admin.absensi', compact('title', 'data_kelas', 'data_siswa', 'data_mapel'));
    }

    public function createAbsensi(Request $request)
    {
        Kehadiran::create([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'waktu_absen' => $request->waktu_absen
        ]);
        return redirect()->back()->with('success', 'Data absensi baru berhasil ditambahkan');
    }

    public function updateAbsensi(Request $request, $id)
    {
        Kehadiran::find($id)->update([
            'siswa_id' => $request->new_siswa_id,
            'guru_id' => $request->new_guru_id,
            'kelas_id' => $request->new_kelas_id,
            'mapel_id' => $request->new_mapel_id
        ]);
        return redirect()->back()->with('success', 'Data kehadiran berhasil diperbaharui');
    }
}
