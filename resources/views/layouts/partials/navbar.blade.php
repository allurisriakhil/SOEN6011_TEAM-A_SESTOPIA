<div class="navbar-container">
    <nav class="navbar navbar-expand-lg bg-white" data-sticky="top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img alt="{{ config('app.name') }}" src="{{ asset('images/logo.png') }}" class="py-1" height="40">
            </a>
            <div class="d-flex align-items-center order-lg-3">
                <a href="#subscribe" data-toggle="modal" class="btn btn-primary text-white ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Subscribe</a>
                <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                    <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" src="{{ asset('images/icon-menu.svg') }}">
                    <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" src="{{ asset('images/icon-x.svg') }}">
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
                                            <a href="{{ route('skills', ['skill' => $skill->slug]) }}" class="dropdown-item {{ Request::is('skills/'. $skill->slug .'*') ? 'active' : '' }}">
                                                {{ $skill->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="mt-3 mt-lg-0" method="GET" action="/search">
                    <label class="sr-only" for="search">Search</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white pr-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg icon icon-xs bg-dark" data-src="assets/img/icons/interface/icon-search.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M21 21L16.65 16.65" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <!-- Code injected by live-server -->
                                </svg>
                            </span>
                        </div>
                        <input class="form-control" placeholder="Type your search" id="search" type="search" name="q" value="">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>