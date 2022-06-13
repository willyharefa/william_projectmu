@extends('layouts.dashboard')
@section('content')
    <section class="data-kelas">
        <div class="container mt-5">
            <h5>Kelas {{ $nameClass }}</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-nilai" data-backdrop="static" data-keyboard="false">
                Nilai Kelas
            </button>
            
            <!-- Modal -->
            
            {{-- Modal For Detail Teacher --}}
            <form action="{{ route('input_nilai') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <input type="hidden" name="name_teacher" value="{{ Auth::guard('guru')->user()->name }}">
                <div class="modal fade" id="tambah-nilai" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Data Nilai Siswa</h5>
                            </div>
                            <div class="modal-body">
                                <table class="table table-borderless text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Agama</th>
                                            <th>PKN</th>
                                            <th>BINDO</th>
                                            <th>BINGG</th>
                                            <th>MTK</th>
                                            <th>TIK</th>
                                            <th>IPA</th>
                                            <th>IPS</th>
                                            <th>SBD</th>
                                            <th>PJOK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <input type="hidden" class="form-control" name="siswa_id[]" value="{{ $item->id }}">
                                                <input type="text" class="form-control" value="{{ $item->name }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" readonly value="{{ $item->class }}" name="name_class[]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="agama[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="pkn[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="bindo[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="bingg[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="mtk[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="ipa[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="ips[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="sbd[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="pjok[]" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="tik[]" required>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal">Simpan Absensi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            @if ($message = Session::get('success'))
                <div class="alert alert-info my-3" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>

        <div class="container my-3">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Siswa</th>
                            <th>Agama</th>
                            <th>PKN</th>
                            <th>BINDO</th>
                            <th>BINGG</th>
                            <th>MTK</th>
                            <th>TIK</th>
                            <th>IPA</th>
                            <th>IPS</th>
                            <th>SBD</th>
                            <th>PJOK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($nilai as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->siswa->name }}</td>
                            <td>{{ $item->name_class }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->bindo }}</td>
                            <td>{{ $item->bingg }}</td>
                            <td>{{ $item->mtk }}</td>
                            <td>{{ $item->tik }}</td>
                            <td>{{ $item->ipa }}</td>
                            <td>{{ $item->ips }}</td>
                            <td>{{ $item->ips }}</td>
                            <td>{{ $item->pjok }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="13">
                                <div class="alert alert-info my-3" role="alert">
                                    Data nilai kelas masih kosong
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
        const form = document.querySelector('.needs-validation');
        form.addEventListener('submit', (e) => {
            if(!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated')
        }, false)
    </script>
@endpush