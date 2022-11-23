<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4">
            <h1><a href="{{ route('home.index') }}" class="logo">SOLUTION <span>Telkom Regional IV DIY</span></a></h1>
            @guest
                <ul class="list-unstyled components mb-5">
                    @if (Route::has('login'))
                        <li class="nav-item @if (request()->routeIs('login')) active @endif">
                            <a class="nav-link" href="{{ route('login') }}"><span
                                    class="fa fa-sign-in mr-3"></span>{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item @if (request()->routeIs('register')) active @endif">
                            <a class="nav-link" href="{{ route('register') }}"><span
                                    class="fa fa-registered mr-3"></span>{{ __('Register') }}</a>
                        </li>
                    @endif
                </ul>
            @else
                <ul class="list-unstyled components mb-5">
                    @role('admin')
                        <li class="@if (request()->routeIs('home.index')) active @endif">
                            <a href="{{ route('home.index') }}"><span class="fa fa-home mr-3"></span> Home</a>
                        </li>
                        <li class="@if (request()->routeIs('solusi.index')) active @endif">
                            <a href="{{ route('solusi.index') }}"><span class="fa fa-user mr-3"></span> Solusi</a>
                        </li>
                    @endrole


                    <li class="@if (request()->routeIs('inisiasi_projek.index')) active @endif">
                        <a href="{{ route('inisiasi_projek.index') }}"><span class="fa fa-briefcase mr-3"></span>
                            Inisiasi-Projek</a>
                    </li>

                    @role('admin')
                        <li class="@if (request()->routeIs('user.index')) active @endif">
                            <a href="{{ route('user.index') }}"><span class="fa fa-users mr-3"></span> Users</a>
                        </li>
                    @endrole
                    {{-- <li>
                        <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="fa fa-sign-out mr-3"></span>
                            {{ __('Logout') }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>

                {{-- <div class="mb-5">
                    <h3 class="h6 mb-3">Subscribe for newsletter</h3>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <div class="icon"><span class="icon-paper-plane"></span></div>
                            <input type="text" class="form-control" placeholder="Enter Email Address">
                        </div>
                    </form>
                </div> --}}

                {{-- <div class="footer">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div> --}}

                {{-- <div class="footer">

                    <ul class="list-unstyled components mb-5">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="fa fa-sign-out mr-3"></span>
                                {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div> --}}
            @endguest

        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        @yield('content')
    </div>
</div>
