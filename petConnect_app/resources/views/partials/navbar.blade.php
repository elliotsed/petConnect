<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <div class="navbar-brand">
            <a href="#">
                <img src="{{ asset('images/logoPet1.png') }}" alt="Logo" width="100" height="100"
                    class="d-inline-block align-text-top">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link me-3" href="/" style="color: black!important">Home</a>
                <a class="nav-link me-3" href="{{ url('about') }}" style="color: black!important">About</a>
                <a class="nav-link me-3" href="{{ url('blog') }}" style="color: black!important">Blog</a>
                <a class="nav-link me-3" href="{{ url('catalog') }}" style="color: black!important">Catalog</a>
                <div class="d-flex d-md-none d-sm-block">
                    <a class="btn btn-sm btn-outline-dark me-2" href="{{ url('register') }}"
                        style="color: black!important">Register</a>
                    <a class="btn btn-sm btn-outline-dark" href="{{ url('login') }}"
                        style="color: black!important">Login</a>
                </div>
            </div>
        </div>
        @if (Auth::check())
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome {{ Auth::user()->first_name }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 36 36">
                            <path fill="currentColor"
                                d="M18 4.25A16.49 16.49 0 0 0 5.4 31.4l.3.35h24.6l.3-.35A16.49 16.49 0 0 0 18 4.25m8.6 9.48l-5.92 5.81a3 3 0 1 1-1.41-1.42l5.91-5.81Zm-23 6.17H7v2H3.56c0-.39-.05-.77-.05-1.17s.02-.55.04-.83Zm4.88-10l2.46 2.46l-1.47 1.38L7 11.29a14.57 14.57 0 0 1 1.43-1.42ZM19 9.79h-2v-3.5h1c.37 0 .7 0 1 .05Zm13.49 10.95c0 .39 0 .79-.05 1.17h-3.52v-2h3.53c.02.27.04.55.04.83"
                                class="clr-i-solid clr-i-solid-path-1" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg> Dashboard</a>
                    <a class="dropdown-item" href="{{ url('cart') }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25c0-.05.01-.09.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                        </svg> Cart</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M16.125 12a.75.75 0 0 0-.75-.75H4.402l1.961-1.68a.75.75 0 1 0-.976-1.14l-3.5 3a.75.75 0 0 0 0 1.14l3.5 3a.75.75 0 1 0 .976-1.14l-1.96-1.68h10.972a.75.75 0 0 0 .75-.75"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M9.375 8c0 .702 0 1.053.169 1.306a1 1 0 0 0 .275.275c.253.169.604.169 1.306.169h4.25a2.25 2.25 0 0 1 0 4.5h-4.25c-.702 0-1.053 0-1.306.168a1 1 0 0 0-.275.276c-.169.253-.169.604-.169 1.306c0 2.828 0 4.243.879 5.121c.878.879 2.292.879 5.12.879h1c2.83 0 4.243 0 5.122-.879c.879-.878.879-2.293.879-5.121V8c0-2.828 0-4.243-.879-5.121C20.617 2 19.203 2 16.375 2h-1c-2.829 0-4.243 0-5.121.879c-.879.878-.879 2.293-.879 5.121" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="d-flex d-none d-lg-block d-md-block">
                <a class="btn btn-sm btn-outline-dark me-2" href="{{ url('register') }}">Register</a>
                <a class="btn btn-sm btn-outline-dark" href="{{ url('login') }}">Login</a>
            </div>
        @endif
    </div>
</nav>
{{-- <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link me-4" aria-current="page" href="/">Home</a>
                <a class="nav-link me-4" href="about">About</a>
                <a class="nav-link me-4" href="blog">Blog</a>
                <a class="nav-link" href="catalog">Catalog</a>
            </div>
        </div>
        <div class="navbar-nav navbar-right">
            <a class="btn btn-sm btn-outline-dark me-2" href="register">Register</a>
            <a class="btn btn-sm btn-outline-dark" href="login">Login</a>
        </div>
    </div>
</nav> --}}
<hr class="my-1">
