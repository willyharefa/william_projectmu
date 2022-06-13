@extends('layouts.dashboard')
@section('content')
    <section class="data-kelas">
        <div class="container mt-5">
            <h5>Kelas {{ $nameClass }}</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-teacher" data-backdrop="static" data-keyboard="false">
                Absen Kelas
            </button>
            
            <!-- Modal -->
            
            {{-- Modal For Detail Teacher --}}
            <form action="{{ route('create_absent') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <input type="hidden" name="name_teacher" value="{{ Auth::guard('guru')->user()->name }}">
                <div class="modal fade" id="add-teacher" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Data Siswa</h5>
                            </div>
                            <div class="modal-body">
                                <div class="col-4 mb-4">
                                    <select class="form-select" name="mapel" required>
                                        <option selected disabled>Pilih Mata Pelajaran</option>
                                        @foreach ($mapel as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <table class="table table-borderless text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tgl Absen</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Pulang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <input type="text" readonly value="{{ $item->name }}" name="name_student[]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" readonly value="{{ $item->class }}" name="name_class[]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="date_absent[]" required value="{{ Carbon\Carbon::now()->format('Y-m-d')}}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Ex: H = Hadir / S = Sakit" name="time_in[]" required autocomplete="off" spellcheck="false">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="Ex: H = Hadir / S = Sakit" name="time_out[]" required autocomplete="off" spellcheck="false">
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

            <div class="row g-0 wrapper__class">
                @foreach ($mapel as $item)
                <a href="{{ route('data_absen',[$item->id, $nameClass]) }}" class="btn btn-secondary">{{ $item->name }}</a>
                @endforeach
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