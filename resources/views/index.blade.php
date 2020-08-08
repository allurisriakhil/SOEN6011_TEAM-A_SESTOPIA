@extends('layouts.app')

@section('content')
<section class="bg-primary-3 o-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-lg-6 text-center text-lg-left mb-4 mb-md-5 mb-lg-0" data-aos="fade-right">
                <h1 class="display-3">{{ config('app.name') }}</h1>
                <p class="lead d-none">Launch your SaaS in style with this suite of carefully crafted pages and components.</p>
                <a href="{{ route('skills') }}" class="btn btn-primary">View Skills</a>
            </div>
            <div class="col pl-5" data-aos="fade-left" data-aos-delay="250">
                <img src="{{ asset('images/home-1.png') }}" alt="Screenshot" class="img-fluid rounded shadow-lg border">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row section-title mb-0">
            <div class="col-md-12">
                <h3 class="display-4">When it comes to mastering a skill, time is the magic ingredient.</h3>
                <div class="lead">-Robert Greene</div>
            </div>
        </div>
    </div>
</section>
@endsection
