@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Daftar Siswa</h1>

        <div class="container">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-student">
                Tambah Siswa
            </button>
            <form action="{{ route('create_siswa') }}" method="post">
                @csrf
                <div class="modal fade" id="add-student" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Data Siswa</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name" name="name" required autocomplete="off" spellcheck="false" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="birthday" class="col-md-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" id="birthday" name="birthday" required value="{{ old('birthday') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-9">
                                        <select class="form-select" name="gender" id="gender" required>
                                            <option selected disabled>Pilih jenis kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-md-3 col-form-label">Alamat</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" id="address" required autocomplete="off" spellcheck="false" value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nisn" class="col-md-3 col-form-label">NISN</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nisn" id="nisn" required autocomplete="off" spellcheck="false" value="{{ old('nisn') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="class" class="col-md-3 col-form-label">Kelas</label>
                                    <div class="col-md-9">
                                        <select class="form-select" name="class" id="class" required>
                                            <option selected disabled>Pilih Kelas</option>
                                            @forelse ($kelas as $item)
                                            <option value="{{ $item->class }}">{{ $item->class }}</option>
                                            @empty
                                            <option disabled>Kelas Kosong</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" data-bs-target="#account" data-bs-toggle="modal">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container mb-3">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="row g-0 mt-3">
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($siswa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->class }}</td>
                            <td>
                                <button type="button" class="btn bg-warning" data-bs-toggle="modal" data-bs-target="#edit-siswa-{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                                
                                <!-- Bagian Edit -->
                                <div class="modal fade" id="edit-siswa-{{ $item->id }}" tabindex="-1">
                                    <form action="{{ route('update_siswa', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data siswa</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama siswa</label>
                                                            <input type="text" class="form-control" name="new_name" required autocomplete="off" spellcheck="false" value="{{ $item->name }}" autofocus>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" name="new_birthday" required value="{{ $item->birthday->format('Y-m-d') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Jenis Kelamin</label>
                                                            <select class="form-select" name="new_gender">
                                                                <option selected>{{ $item->gender }}</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Alamat</label>
                                                            <input type="text" class="form-control" name="new_gender" required autocomplete="off" spellcheck="false" value="{{ $item->gender }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">NISN (Nomor Induk siswa Nasional)</label>
                                                            <input type="text" class="form-control" name="new_nisn" required autocomplete="off" spellcheck="false" value="{{ $item->nisn }}">
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