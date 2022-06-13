@extends('layouts.dashboard')
@section('content')
    <section class="section-data-absen">
        <div class="container mt-5">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Siswa</th>
                            <th>Tanggal Absen</th>
                            <th>Masuk</th>
                            <th>Pulang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($absensi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name_student }}</td>
                            <td>{{ $item->date_absent }}</td>
                            <td>{{ $item->time_in }}</td>
                            <td>{{ $item->time_out }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-primary" role="alert">
                                    Data absensi kelas masih kosong.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <a href="{{ route('absensi_kelas', $tagName) }}" class="btn btn-primary">Halaman sebelumnya</a>
        </div>
    </section>
@endsection