@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Daftar Kelas</h1>

        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambah-kelas">
                Tanbah Kelas
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="tambah-kelas" tabindex="-1">
                <form action="{{ route('create_kelas') }}" method="POST">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Kelas</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Nama kelas</label>
                                        <input type="text" class="form-control" name="name" required autocomplete="off" spellcheck="false" placeholder="Ex: Kelas IB" value="{{ old('name') }}">
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
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->class }}</td>
                            <td>
                                <button type="button" class="btn bg-warning" data-bs-toggle="modal" data-bs-target="#edit-kelas-{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </button>
                                
                                <!-- Bagian Edit -->
                                <div class="modal fade" id="edit-kelas-{{ $item->id }}" tabindex="-1">
                                    <form action="{{ route('update_kelas', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data kelas</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama kelas</label>
                                                            <input type="text" class="form-control" name="new_name" required autocomplete="off" spellcheck="false" placeholder="Ex: Kelas IB" value="{{ $item->class}}">
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
                            <td colspan="4">
                                <div class="alert alert-info my-3" role="alert">
                                    Data kelas masih kosong.
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