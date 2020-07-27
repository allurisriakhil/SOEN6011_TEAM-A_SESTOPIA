@extends('layouts.app')

@section('content')
<div data-overlay class="bg-primary-3 o-hidden">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 text-center">
                    <h1 class="display-3">Help Center</h1>
                    <div class="lead d-none">Learn valuable tips and tricks from our experienced experts</div>
                    <form class="mt-5 d-flex flex-column flex-md-row form-group">
                        <input class="form-control form-control-lg h-100 mb-2 mb-md-0 mr-md-3" name="q" placeholder="Search for skill" type="search">
                        <button class="btn btn-lg btn-primary" type="submit">Search</button>
                    </form>
                    {{-- <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="text-small mb-2 mb-sm-0 mr-2">Popular keywords:</div>
                        <ul class="d-flex flex-wrap list-unstyled mb-0">
                            <li class="m-1">
                                <a class="badge badge-pill badge-white" href="#">security</a>
                            </li>
                            <li class="m-1">
                                <a class="badge badge-pill badge-white" href="#">payment method</a>
                            </li>
                            <li class="m-1">
                                <a class="badge badge-pill badge-white" href="#">invoice</a>
                            </li>
                            <li class="m-1">
                                <a class="badge badge-pill badge-white" href="#">upgrade</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
