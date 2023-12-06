<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <div class="navbar-brand">
            <a href="#">
                <img src="{{ asset('images/logoPet.png') }}" alt="Logo" width="150" height="150"
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
                <a class="nav-link me-3" href="{{url('about')}}" style="color: black!important">About</a>
                <a class="nav-link me-3" href="{{url('blog')}}" style="color: black!important">Blog</a>
                <a class="nav-link me-3" href="{{url('catalog')}}" style="color: black!important">Catalog</a>
                <div class="d-flex d-md-none d-sm-block">
                    <a class="btn btn-sm btn-outline-dark me-2" href="{{url('register')}}" style="color: black!important">Register</a>
                    <a class="btn btn-sm btn-outline-dark" href="{{url('login')}}" style="color: black!important">Login</a>
                </div>
            </div>
        </div>
        <div class="d-flex d-none d-lg-block d-md-block">
            <a class="btn btn-sm btn-outline-dark me-2" href="{{url('register')}}">Register</a>
            <a class="btn btn-sm btn-outline-dark" href="{{url('login')}}">Login</a>
        </div>
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
