@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    @include('skills.partials.breadcrumbs', ['skill' => $skill])
                </div>
                <h2 class="h1 mt-4">Skill Name</h2>
                <div class="lead">Consectetur adipiscing elit. Phasellus feugiat elit.</div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
                        <article class="article">
                            <h3 class="h2">Intro to article</h3>
                            <p>
                                Aenean Gendry est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry
                                est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                            </p>
                            <p>
                                Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                            </p>
                            <p>
                                Dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim lacinia semper. Cras nulla lectus, porttitor vitae urna iaculis, melisandre tincidunt lectus. Brienne nec tellus sit amet massa auctor imperdiet id vitae diam.
                            </p>
                            <p>
                                Gravida est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est
                                nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                            </p>
                        </article>
                        <div class="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
                            <div class="h5 mb-sm-0">Did you find this helpful?</div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1">Yes</a>
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1">No</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col sticky-lg-top">
                <div class="pl-xl-4">
                    <div class="list-group mb-3 mb-md-4">
                        <div class="list-group-item">
                            <h6 class="mb-0">Similar Articles</h6>
                        </div>
                        <div class="list-group-item">
                            <a href="#">Cancelling your subscription</a>
                            <div class="text-small">Donec a leo ac diam vulputate khaleesi eget est.</div>
                        </div>
                        <div class="list-group-item">
                            <a href="#">Upgrading your plan</a>
                            <div class="text-small">Volantis phasellus tincidunt vitae libero efficitur viverra.</div>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-2">Email Us</h6>
                            <a href="#">hello@jumpstart.io</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-2">Call any time</h6>
                            <a href="#">1800 488 328</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-2">Get in touch</h6>
                            <a href="contact-1.html">Leave a message</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block mt-3 mt-md-4">Open a Suport Ticket</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection