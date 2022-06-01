@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Data Absensi</h1>
        <p>Sebelum melakukan absensi, tambah data absensi terlebih dahulu</p>

        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambah-absensi">
                Tambah Siswa
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="tambah-absensi" tabindex="-1">
                <form action="{{ route('create_absensi') }}" method="POST">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Absensi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Guru</label>
                                        <select class="selectpicker" data-live-search="true" name="guru_id" required>
                                            <option selected disabled>Pilih nama guru :</option>
                                            @foreach ($data_guru as $guru)
                                                <option value="{{ $guru->id }}">{{ $guru->nama_guru }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Siswa</label>
                                        <select class="selectpicker" data-live-search="true" name="siswa_id" required>
                                            <option selected disabled>Pilih nama siswa:</option>
                                            @foreach ($data_siswa as $siswa)
                                                <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kelas</label>
                                        <select class="selectpicker" data-live-search="true" name="kelas_id" required>
                                            <option selected disabled>Pilih nama kelas :</option>
                                            @foreach ($data_kelas as $kelas)
                                                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name_mapel" class="form-label">Nama Mata Pelajaran</label>
                                        <select class="selectpicker" data-live-search="true" name="mapel_id" required>
                                            <option selected disabled>Pilih nama mapel :</option>
                                            @foreach ($data_mapel as $mapel)
                                                <option value="{{ $mapel->id }}">{{ $mapel->name_mapel }}</option>
                                            @endforeach
                                        </select>
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

        {{-- <div class="row my-5">
            <div class="mb-3">
                <label class="form-label">CEKLIS SISWA</label>
                <form action="{{ route('example_exe') }}" method="post">
                    @csrf
                    <input type="text" name="nama_saya" class="form-control">
                    <table>
                        <tbody>
                            @foreach ($data_siswa as $siswa)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="data[]" value="{{ $siswa->nama }}" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $siswa->nama }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">Simpan Kehadiran</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div> --}}
        <div class="row g-0 mt-3">
            @if ($message = session('success')) 
            <div class="alert alert-success mt-3" role="alert">
                {{ $message }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Guru Pengasuh</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kehadiran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->siswa->nama }}</td>
                            <td>{{ $item->guru->nama_guru }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->mapel->name_mapel }}</td>
                            <td>
                                <button type="button" class="btn btn-edit bg-warning" data-bs-toggle="modal" data-bs-target="#edit-absensi-{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                                
                                <!-- Bagian Edit -->
                                <div class="modal fade" id="edit-absensi-{{ $item->id }}" tabindex="-1">
                                    <form action="{{ route('update_absensi', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Absensi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Guru</label>
                                                            <select class="form-select" name="new_guru_id" required>
                                                                <option selected value="{{ $item->guru_id }}">{{ $item->guru->nama_guru }}</option>
                                                                @foreach ($data_guru as $guru)
                                                                    <option value="{{ $guru->id }}">{{ $guru->nama_guru }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Siswa</label>
                                                            <select class="form-select" name="new_siswa_id" required>
                                                                <option selected value="{{ $item->siswa_id }}">{{ $item->siswa->nama }}</option>
                                                                @foreach ($data_siswa as $siswa)
                                                                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            
                                                            <label class="form-label">Nama Kelas</label>
                                                            <select class="form-select" name="new_kelas_id" required>
                                                                <option selected value="{{ $item->kelas_id }}">{{ $item->kelas->nama_kelas }}</option>
                                                                @foreach ($data_kelas as $kelas)
                                                                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="name_mapel" class="form-label">Nama Mata Pelajaran</label>
                                                            <select class="form-select" name="new_mapel_id" required>
                                                                <option selected value="{{ $item->mapel_id }}">{{ $item->mapel->name_mapel }}</option>
                                                                @foreach ($data_mapel as $mapel)
                                                                    <option value="{{ $mapel->id }}">{{ $mapel->name_mapel }}</option>
                                                                @endforeach
                                                            </select>
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
                                <a class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-info my-3" role="alert">
                                    Data siswa masih kosong.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
            $('.selectpicker').selectpicker();
        });
    </script>
@endpush