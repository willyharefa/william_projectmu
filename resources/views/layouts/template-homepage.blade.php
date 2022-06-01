<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
    <title>{{ $title }}</title>
</head>
<body>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('homepage') }}"><strong>SD IT NURUSSALAM</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'SD IT Nurussalam - Selamat datang di website kami' ? 'active' : '' }}" aria-current="page" href="{{ route('homepage') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lokasi</a>
                        </li>
                    </ul>
                    @if ($title !== 'Form Login')
                    <ul class="navbar-nav ms-auto">
                        {{-- @guest('web','guru')
                        
                        @endguest
                            @auth('web')
                            
                            @endauth
                            @auth('guru')
                            
                            @endauth --}}
                            {{-- @auth
                            <p>okeokeo</p>
                            @else
                            
                            @endauth --}}
                            @if (Auth::check())
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard Saya</a>
                            </li>
                            @elseif(Auth::guard('guru')->check())
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="btn btn-primary">Hi {{ Auth::guard('guru')->user()->nama_guru }}</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            </li>
                            @endif
                    </ul>
                    @endif
                </div>
            </div>
        </nav>

        <div class="content">
            @yield('container')
        </div>
    </div>





    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @stack('script')
</body>
</html>