<style>
    li {
        list-style: none;
        margin: 20px 0 20px 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
    }

    .active-main-content {
        margin-left: 250px;
    }

    .active-sidebar {
        margin-left: 0;
    }

    #main-content {
        transition: 0.4s;
    }
</style>

<div>

    @include('layouts.navbar')

    <div class="sidebar p-4 bg-secondary bg-opacity-10" id="sidebar">
        {{-- <h4 class="mb-5 text-white">SuperVideo</h4> --}}

        <img src="{{ asset('images/logo-telkom.png') }}" width="150rem" alt="logo">

        <li>
            <a class="text-dark" href="{{ route('home') }}">
                <i class="bi bi-house mr-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a class="text-dark" href="{{ route('solusi') }}">
                <i class="bi bi-fire mr-2"></i>
                Solusi
            </a>
        </li>
        <li>
            <a class="text-dark" href="{{ route('inisiasi_projek') }}">
                <i class="bi bi-newspaper mr-2"></i>
                Inisiasi-Projek
            </a>
        </li>
        {{-- <li>
            <a class="text-white" href="#">
                <i class="bi bi-bicycle mr-2"></i>
                Sports
            </a>
        </li>
        <li>
            <a class="text-white" href="#">
                <i class="bi bi-boombox mr-2"></i>
                Music
            </a>
        </li>
        <li>
            <a class="text-white" href="#">
                <i class="bi bi-film mr-2"></i>
                Film
            </a>
        </li>
        <li>
            <a class="text-white" href="#">
                <i class="bi bi-bookmark mr-2"></i>
                Bookmark
            </a>
        </li> --}}
    </div>
</div>
<div class="p-4" id="main-content">
    <button class="btn btn-secondary" id="button-toggle">
        <i class="bi bi-list"></i>
    </button>
    <div class="container">
        @yield('content')
    </div>
    {{-- <div class="card mt-5">
        <div class="card-body">
            <h4>Lorem Ipsum</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                animi maxime at minima. Totam vero omnis ducimus commodi placeat
                accusamus, repudiandae nemo, harum magni aperiam esse voluptates.
                Non, sapiente vero?
            </p>
        </div>
    </div> --}}
</div>


<script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");
    });
</script>
