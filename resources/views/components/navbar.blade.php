<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><b>N5</b>Galeri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-secondary"
                        style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .10rem; --bs-btn-font-size: .80rem;">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door-fill" viewBox="0 0 16 20">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                            </svg> Home
                        </a>
                    </button>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li> --}}
            </ul>
        </div>
        @if (!Auth::check())
            <div>
                <a href="{{ route('login.index') }}" class="btn btn-info textwhite">Login</a>
            </div>
        @else
            <div class="dropdown">
                <a class="btn text-white dropdown-toggle"href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama }}
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('photo.post') }}">Posting</a></li>
                    <li><a class="dropdown-item" href="{{ route('album.create_album') }}">Buat Album</a></li>
                    <li><a class="dropdown-item" href="{{ route('album.index', Auth::user()->id) }}">Album</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        @endif
    </div>
</nav>
