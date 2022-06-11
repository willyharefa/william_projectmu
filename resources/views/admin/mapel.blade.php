@extends('layouts.dashboard');
@section('content')
    <section class="section-mapel">
        <h1 class="mt-4">Mata Pelajaran</h1>
        <div class="col-md-6 col-sm-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#tambah-mapel">
                Tanbah Mapel
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="tambah-mapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ route('create_mapel') }}" method="POST">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Mapel</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama Mapel</label>
                                    <input type="text" class="form-control" name="name" required autocomplete="off" spellcheck="false" placeholder="Ex: PKN/IPA/PENJAS">
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
        <div class="table-responsive">
            <table class="table table-borderless align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mapel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mapel as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name_mapel }}</td>
                        <td>
                            <button type="button" class="btn btn-edit bg-warning" data-bs-toggle="modal" data-bs-target="#edit-mapel-{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                                Edit Mapel
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="edit-mapel-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <form action="{{ route('update_mapel', $item->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Data Mapel</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="name_mapel" class="form-label">Nama Mapel</label>
                                                    <input type="text" class="form-control" name="new_name" required autocomplete="off" spellcheck="false" placeholder="Ex: PKN/IPA/PENJAS" value="{{ $item->name_mapel }}">
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
                                Data mata pelajaran masih kosong.
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