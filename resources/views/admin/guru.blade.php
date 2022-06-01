@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Daftar Guru</h1>

        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambah-guru">
                Tanbah Guru
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="tambah-guru" tabindex="-1">
                <form action="{{ route('create_guru') }}" method="POST">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="name_guru" class="form-label">Nama Guru</label>
                                            <input type="text" class="form-control" id="name_guru" name="nama_guru" required autocomplete="off" spellcheck="false" placeholder="Ex: Nurhalimah, S.Pd" value="{{ old('name_guru') }}" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="{{ old('tg_lahir') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" name="jenis_kelamin">
                                                <option selected disabled>Pilih jenis kelamin :</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" required autocomplete="off" spellcheck="false" placeholder="Masukan alamat" value="{{ old('alamat') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nuptk" class="form-label">NUPTK (Nomor Identitas Guru)</label>
                                            <input type="text" class="form-control" id="nuptk" name="nuptk" required autocomplete="off" spellcheck="false" placeholder="Ex: 177-000-110-11" value="{{ old('nuptk') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="username" class="form-label"><strong>Username</strong></label>
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autocomplete="off" spellcheck="false" placeholder="Masukan username" value="{{ old('username') }}">
                                            <div class="form-text">Username guru harus unik dari database.</div>
                                            @error('username')
                                            <div class="alert alert-danger my-2" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label"><strong>Password</strong></label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="off" spellcheck="false" placeholder="Masukan password" value="{{ old('password') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label"><strong>No Telepon</strong></label>
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" required autocomplete="off" spellcheck="false" placeholder="Masukan nomor telepon" value="{{ old('no_telp') }}">
                                            <div class="form-text">Pastikan input nomor telepon yang aktif.</div>
                                        </div>
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
        <div class="row g-0 mt-3">
            @if ($message = session('success')) 
            <div class="alert alert-success mt-3" role="alert">
                {{ $message }}
            </div>
            @endif
            @if ($errors->first('username.unique'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ $errors->first('username.unique') }}
            </div>
            @endif
            @if ($errors->first('password.min'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ $errors->first('password.min') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NUPTK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($guru as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nuptk }}</td>
                            <td>{{ $item->nama_guru }}</td>
                            <td>{{ $item->tgl_lahir->format('d F Y') }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telp }}</td>
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
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="mb-3">
                                                                <label for="name_guru" class="form-label">Nama Guru</label>
                                                                <input type="text" class="form-control" id="name_guru" name="new_name_guru" required autocomplete="off" spellcheck="false" placeholder="Ex: Nurhalimah, S.Pd" value="{{ $item->nama_guru }}" autofocus>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Tanggal Lahir</label>
                                                                <input type="date" class="form-control" name="new_tgl_lahir" required value="{{ $item->tgl_lahir->format('Y-m-d') }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                                <select class="form-select" name="new_jenis_kelamin">
                                                                    <option selected>{{ $item->jenis_kelamin }}</option>
                                                                    <option value="Pria">Pria</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="alamat" class="form-label">Alamat</label>
                                                                <input type="text" class="form-control" id="alamat" name="new_alamat" required autocomplete="off" spellcheck="false" placeholder="Masukan alamat" value="{{ $item->alamat }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nuptk" class="form-label">NUPTK (Nomor Identitas Guru)</label>
                                                                <input type="text" class="form-control" id="nuptk" name="new_nuptk" required autocomplete="off" spellcheck="false" placeholder="Masukan NUPTK" value="{{ $item->nuptk }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="mb-3">
                                                                <label for="username" class="form-label"><strong>Username</strong></label>
                                                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="new_username" required autocomplete="off" spellcheck="false" placeholder="Masukan username" value="{{ $item->username }}">
                                                                <div class="form-text">Username guru harus unik dari database.</div>
                                                                @error('username')
                                                                <div class="alert alert-danger my-2" role="alert">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_telp" class="form-label"><strong>No Telepon</strong></label>
                                                                <input type="text" class="form-control" id="no_telp" name="new_no_telp" required autocomplete="off" spellcheck="false" placeholder="Masukan nomor telepon" value="{{ $item->no_telp }}">
                                                                <div class="form-text">Pastikan input nomor telepon yang aktif.</div>
                                                            </div>
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