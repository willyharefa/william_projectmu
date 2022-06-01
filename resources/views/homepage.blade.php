@extends('layouts.template-homepage')
@section('container')
    <section class="section-homepage">
        <div class="row-heading mb-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/carousel_2.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><strong>Aktivitas Sekolah</strong></h2>
                            <p>Gambaran aktivitas berlangsung saat disekolah</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/carousel_3.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><strong>Lapangan Sekolah</strong></h2>
                            <p>Lapangan untuk kegiatan akademik</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/carousel_1.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2><strong>Proses Pembelajaran</strong></h2>
                            <p>Proses kegiatan pembelajaran disekolah</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Selanjutnya</span>
                </button>
                </div>
        </div>
        <div class="wrapper-about mb-5">
            <div class="row row-heading-about text-center mb-4">
                <h2>Tentang Kami</h2>
                <p class="text-muted">SD IT Nurussalam</p>
            </div>
            <div class="row row-content-about">
                <div class="col-sm-12 col-md-4 image-about">
                    <img src="{{ asset('/img/carousel_2.jpeg') }}" alt="">
                </div>
                <div class="col paragraph-about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla reiciendis, excepturi nostrum et assumenda iusto laudantium ipsa vel soluta esse eius a? Asperiores nam, maiores eum doloribus itaque ipsa consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nisi magnam aut officiis minus odit laudantium inventore, laboriosam quis earum?</p>
                </div>
            </div>
            <div class="row gap-5 g-0 row-facilities">
                <div class="col col-count-room">
                    <i class="fas fa-university icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>16</strong></h1>
                        <p>JUMLAH RUANGAN</p>
                    </div>
                </div>
                <div class="col col-count-room">
                    <i class="fas fa-users icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>4500</strong></h1>
                        <p>JUMLAH SISWA</p>
                    </div>
                </div>
                <div class="col col-count-room">
                    <i class="fas fa-user-tie icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>34</strong></h1>
                        <p>JUMLAH PENGAJAR</p>
                    </div>
                </div>
                <div class="col col-count-room">
                    <i class="fas fa-award icon"></i>
                    <div class="detail">
                        <h1 class="display-2 mb-0"><strong>B</strong></h1>
                        <p>AKREDITAS SEKOLAH</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-map">
            <div class="row row-heading-about text-center mb-4">
                <h2>Denah Kelas</h2>
            </div>
            <div class="content-map">
                <img src="{{ asset('/img/denah_kelas.png') }}" alt="">
            </div>
        </div>
    </section>
    
    <footer>
        <div class="row g-0 gap-4 map-direction justify-content-between">
            <div class="col-md-4 col-sm-12 map-content">
                <div class="heading">
                    <h4>LOKASI SEKOLAH</h4>
                    <p class="text-muted">Jl. Selamat Kota Pekanbaru</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5318.9069992770455!2d101.41749678358008!3d0.5114707697771357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9598dd3912f%3A0xd62982d8485eca15!2sSekolah%20Dasar%20Islam%20Terpadu%20Nurussalam!5e0!3m2!1sid!2sid!4v1652945681440!5m2!1sid!2sid" width="400" height="235" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 col-sm-12 desc-location">
                    <div class="row g-0">
                        <div class="mb-3">
                            <label class="form-text"><i class="fas fa-phone-alt"></i> NO TELEPON</label>
                            <p>(071 9000 9111)</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-text"><i class="far fa-envelope"></i> EMAIL</label>
                            <p>sdit.nurussalam@gmail.com</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading"><i class="fas fa-exclamation-circle"></i> Informasi</h4>
                            <p>Untuk anda yang ingin menggunakan layanan kami dalam memantau anak anda, bisa melakukan proses registrasi / buat akun baru terlebih dahulu pada tombol klik diatas.</p>
                        </div>
                    </div>
            </div>
        </div>
    </footer>
@endsection