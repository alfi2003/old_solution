<nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            <img src="{{ asset('images/logo-telkom.png') }}" width="100rem" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    {{-- Awal menu yang hanya bisa di akses oleh admin --}}
                    @if (auth()->user()->name == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('solusi') }}">Solusi</a>
                        </li>
                    @endif
                    {{-- Akhir menu yang hanya bisa di akses oleh admin --}}

                    {{-- Awal Menu yang bisa di akses oleh admin & user --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inisiasi_projek') }}">Inisiasi Projek</a>
                    </li>
                    {{-- Akhir Menu yang bisa di akses oleh admin & user --}}
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            @if (auth()->user()->name == 'Admin')
                                <li>
                                    <a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i>
                                        Users</a>
                                </li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-door-open-fill"></i>
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
