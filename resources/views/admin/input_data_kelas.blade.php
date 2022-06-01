@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Data Absensi</h1>
        <p>Sebelum melakukan absensi, tambah data absensi terlebih dahulu</p>

        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambah_data_kelas">
                Tambah Siswa
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="tambah_data_kelas" tabindex="-1">
                <form action="/tambah_data_kelas" method="POST">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data kelas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Siswa</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name_mapel" class="form-label">Nama Mata Pelajaran</label>
                                        <input type="date" class="form-control" name="waktu_absen" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection