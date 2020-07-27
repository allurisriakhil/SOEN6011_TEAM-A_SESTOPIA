@extends('errors.layouts.errors')

@section('content')
<section class="bg-primary-3 p-0 o-hidden">
    <div class="container min-vh-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
        <a href="{{ route('home') }}" class="fade-page">
            <img src="" alt="Jumpstart" class="bg-white" data-inject-svg>
        </a>
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1>404 - Page Not Found</h1>
                    <div class="lead">Whoops, it looks like the page you request wasn't found.</div>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-dark fade-page">Back to Home</a>
        </div>
    </div>
</section>
@endsection