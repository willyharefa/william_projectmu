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
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mapel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="kode_mapel" class="form-label">Kode Mapel</label>
                                    <input type="text" class="form-control @error('kode_mapel') is-invalid @enderror" id="kode_mapel" name="kode_mapel" placeholder="Ex. : A001" required autocomplete="off" spellcheck="false" value="{{ old('kode_mapel') }}" autofocus>
                                    <div class="form-text">Urutkan kode mapel Ex: A-0001 maka selanjutnya A-0002</div>
                                    @error('kode_mapel')
                                    <div class="alert alert-danger my-2" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="name_mapel" class="form-label">Nama Mapel</label>
                                    <input type="text" class="form-control" id="name_mapel" name="name_mapel" required autocomplete="off" spellcheck="false" placeholder="Ex: PKN/IPA/PENJAS" value="{{ old('name_mapel') }}">
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
            @if ($errors->first('kode_mapel'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ $errors->first('kode_mapel') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-borderless align-middle text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Mapel</th>
                            <th scope="col">Nama Mapel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mapel as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_mapel }}</td>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Mapel</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="kode_mapel" class="form-label">Kode Mapel</label>
                                                        <input type="text" class="form-control" id="kode_mapel" name="new_kode_mapel" placeholder="Ex. : A001" required autocomplete="off" spellcheck="false" value="{{ $item->kode_mapel }}" autofocus>
                                                        <div class="form-text">Urutkan kode mapel Ex: A-0001 maka selanjutnya A-0002</div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name_mapel" class="form-label">Nama Mapel</label>
                                                        <input type="text" class="form-control" id="name_mapel" name="new_name_mapel" required autocomplete="off" spellcheck="false" placeholder="Ex: PKN/IPA/PENJAS" value="{{ $item->name_mapel }}">
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