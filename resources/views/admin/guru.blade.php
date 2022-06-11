@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Daftar Guru</h1>

        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#add-teacher">
                Tambah Guru
            </button>
            
            <!-- Modal -->
            <form action="{{ route('create_guru') }}" method="POST">
                @csrf
                {{-- Modal For Detail Teacher --}}
                <div class="modal fade" id="add-teacher" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-lg modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Guru</h5>
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
                                        <label for="nip" class="col-md-3 col-form-label">NIP</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nip" id="nip" required autocomplete="off" spellcheck="false" value="{{ old('nip') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nuptk" class="col-md-3 col-form-label">NUPTK</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nuptk" id="nuptk" required autocomplete="off" spellcheck="false" value="{{ old('nuptk') }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="grade" class="col-md-3 col-form-label">Pangkat</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="grade" id="grade" required autocomplete="off" spellcheck="false" value="{{ old('grade') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary" data-bs-target="#account" data-bs-toggle="modal">Selanjutnya</button>
                                </div>
                            </div>
                        </div>
                </div>
                {{-- Modal For Account Detail --}}
                <div class="modal fade" id="account" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Data Akun</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="username" class="col-md-3 col-form-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="username" name="username" required autocomplete="off" spellcheck="false" value="{{ old('username') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" name="email" required autocomplete="off" spellcheck="false" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password_confirmation" class="col-md-3 col-form-label">Konfirmasi Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                        <div id="passwordHelpBlock" class="form-text">
                                            Konfirmasi kembali password anda, password harus minimal 6 karakter.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-target="#add-teacher" data-bs-toggle="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        </div>

        <div class="row g-0 mt-3">
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NUPTK</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($guru as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nuptk }}</td>
                            <td>
                                <button type="button" class="btn btn-edit bg-warning" data-bs-toggle="modal" data-bs-target="#edit-guru-{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                                
                                <!-- Bagian Edit -->
                                <div class="modal fade" id="edit-guru-{{ $item->id }}" tabindex="-1">
                                    <form action="{{ route('update_guru', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
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
                                    Data guru masih kosong.
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