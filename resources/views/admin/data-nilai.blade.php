@extends('layouts.dashboard');
@section('content')
    <section class="section-absensi">
        <h3>Data Kelas</h3>
        <p>Pilih nama kelas yang ingin di nilai</p>
        <div class="container m-0">
            <h6 class="text-muted">KELAS 1</h6>
            <div class="row g-0 mb-4 satu">
                <a href="{{ route('nilai_kelas', '1A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 1A</h3>
                </a>
            </div>
            
            <h6 class="text-muted">KELAS 2</h6>
            <div class="row g-0 gap-3 mb-4 dua">
                <a href="{{ route('nilai_kelas', '2A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 2A</h3>
                </a>
                <a href="{{ route('nilai_kelas', '2B') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 2B</h3>
                </a>
            </div>

            <h6 class="text-muted">KELAS 3</h6>
            <div class="row g-0 gap-3 mb-4 tiga">
                <a href="{{ route('nilai_kelas', '3A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 3A</h3>
                </a>
            </div>

            <h6 class="text-muted">KELAS 4</h6>
            <div class="row g-0 gap-3 mb-4 empat">
                <a href="{{ route('nilai_kelas', '4A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 4A</h3>
                </a>
                <a href="{{ route('nilai_kelas', '4B') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 4B</h3>
                </a>
            </div>

            <h6 class="text-muted">KELAS 5</h6>
            <div class="row g-0 gap-3 mb-4 lima">
                <a href="{{ route('nilai_kelas', '5A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 5A</h3>
                </a>
            </div>

            <h6 class="text-muted">KELAS 6</h6>
            <div class="row g-0 gap-3 mb-4 enam">
                <a href="{{ route('nilai_kelas', '6A') }}" class="btn col-sm-12 col-md-4">
                    <h3>Kelas 6A</h3>
                </a>
            </div>
        </div>
    </section>
@endsection