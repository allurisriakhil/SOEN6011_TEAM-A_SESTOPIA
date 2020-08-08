@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    @include('skills.partials.breadcrumbs', ['skill' => $skill])
                </div>
                <h2 class="h1 mt-4">{{ $skill->name }} <small>By {{ "{$skill->author->name} ({$skill->author->student_id})" }}</small></h2>
                <a href="#" class="badge badge-dark mb-3">{{ $skill->knowledge_area }}</a>
                <hr class="my-md-2 my-lg-3">
                <div class="row">
                    <div class="col-xl-11">
                        <article class="article">
                            @foreach ($content as $item)
                            <a href="{{ __("#{$item['slug']}") }}" class="text-dark h4 d-block" id="{{ $item['slug'] }}">{{ $item['name'] }}</a>
                            @endforeach
                        </article>
                    </div>
                </div>
            </div>
            @include('skills.partials.sidebar')
        </div>
    </div>
</section>
@endsection