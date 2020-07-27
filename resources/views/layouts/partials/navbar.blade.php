<div class="navbar-container">
    <nav class="navbar navbar-expand-lg bg-white" data-sticky="top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('images/logo.png') }}" class="py-1" height="40">
            </a>
            <div class="d-flex align-items-center order-lg-3">
                <a href="#" class="btn btn-primary text-white ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Subscribe</a>
                <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                    <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="{{ asset('images/icon-menu.svg') }}">
                    <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="{{ asset('images/icon-x.svg') }}">
                </button>
            </div>
            <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                <ul class="navbar-nav my-3 my-lg-0">
                    <li class="nav-item {{ Request::is('/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('skills*') ? 'active' : '' }}">
                        <div class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid" href="#" role="button">Skills</a>
                            <div class="row dropdown-menu">
                                <div class="col-auto" data-dropdown-content>
                                    <div class="dropdown-grid-menu">
                                        @foreach ($skills as $skill)
                                            <a href="{{ route('skills', ['skill' => Str::slug($skill)]) }}" class="dropdown-item {{ Request::is('skills/'. Str::slug($skill) .'*') ? 'active' : '' }}">{{ $skill }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('search*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('search') }}">Search</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>