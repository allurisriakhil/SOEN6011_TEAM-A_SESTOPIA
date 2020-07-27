<footer class=" pt-4 pb-4 footer-1">
    <div class="container">
        <div class="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <div class="col-auto">
                <div class="d-flex flex-column flex-sm-row align-items-center text-small">
                    <div class="text-muted">
                        &copy; {{ date('Y') }} {{ config('app.name') }} - Team A
                    </div>
                </div>
            </div>
            <div class="col-auto mt-3 mt-lg-0">
                <ul class="list-unstyled d-flex mb-0">
                    <li class="mx-3">
                        <a href="#" class="hover-fade-out">
                            <img src="{{ asset('images/github.svg') }}" alt="Github" class="icon icon-xs bg-white" data-inject-svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>