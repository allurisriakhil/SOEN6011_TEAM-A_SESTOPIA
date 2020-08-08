@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h1">All Skills</h2>
            </div>
        </div>
        <div class="row">
            @forelse ($skills as $skill)
            <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                <div class="card h-100 hover-box-shadow">
                    <div class="card-body">
                        <a href="{{ route('skills', ['skill' => $skill->slug]) }}">
                            <h5>{{ $skill->name }}</h5>
                        </a>
                        <a href="#" class="badge badge-dark mb-3">{{ $skill->knowledge_area }}</a>
                        <a href="{{ route('skills', ['skill' => $skill->slug]) }}" class="d-block">View Skill</a>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
            
        </div>
    </div>
</section>
@endsection