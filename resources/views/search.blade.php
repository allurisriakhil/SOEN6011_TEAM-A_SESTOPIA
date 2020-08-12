@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Search Results </h1>
                @if ($results->hasData)
                    <h2 class="lead"> 
                        <strong class="text-primary">{{ $results->count }}</strong> {{ Str::plural('result', $results->count) }} were found for the search for <strong class="text-danger"> "{{ $results->query }}" </strong> 
                    </h2>
                @endif
            </div>
        </div>
        <div class="row">
            @forelse ($results->data as $result)
            
                @foreach ($result as $item)
                <div class="col-12 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <div class="card-body">
                            <span class="d-none">{{ $slug = ($item->slug) ? $item->slug : $item->skill->slug }}</span>
                            <a href="{{ route('skills', ['skill' => $slug]) }}">
                                <h5>{!! $item->name !!}</h5>
                            </a>
                            <a href="#" class="badge badge-dark mb-3">{!! $item->knowledge_area !!}</a>
                            <a href="{{ route('skills', ['skill' => $slug]) }}" class="d-block">View Skill</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <hr>
            @empty
            <div class="col-12 mb-3 mb-md-4">
                No results were found for the search for <strong class="text-primary"> "{{ $results->query }}" </strong>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
