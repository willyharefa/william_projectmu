@extends('layouts.template-homepage')
@section('container')
    <section class="section-registration">
        <div class="container-registration">
            <h4>Form Registrasi</h4>
            <p class="form-text">Silahkan lengkapi data dibawah</p>
            <form action="{{ route('registration_now') }}" method="POST">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" required autocomplete="off" spellcheck="false" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="address" required autocomplete="off" spellcheck="false" value="{{ old('address') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telepon / WA </label>
                            <input type="text" class="form-control" name="phone" required autocomplete="off" spellcheck="false" value="{{ old('phone') }}">
                            <div class="form-text">Pastikan nomor telepon yang anda masukan aktif.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label class="form-label"><strong>Username</strong></label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autocomplete="off" spellcheck="false" value="{{ old('username') }}">
                            @error('username')
                            <div class="alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><strong>Password</strong></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror password-input" id="password" name="password" required>
                                <button class="input-group-text" id="show-pass">
                                    <i class="fas fa-eye show-on"></i>
                                    <i class="fas fa-eye-slash show-off"></i>
                                </button>
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <button type="submit" class="btn btn-primary px-3 py-2 mb-3 text-center">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('script')
    <script>
        const   btnShowPass = document.querySelector("#show-pass");
        const   inputPass = document.querySelector(".password-input");
                btnShowPass.addEventListener("click", (e) => {
                    e.preventDefault();
                    btnShowPass.classList.toggle("show-eyes");
                    if(inputPass.type === "password") {
                        inputPass.type = "text";
                    } else {
                        inputPass.type = "password";
                    }
                });
    </script>
@endpush