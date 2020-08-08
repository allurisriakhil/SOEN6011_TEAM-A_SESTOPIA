<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('skills') }}">Skills</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('skills', ['skill' => $skill->slug]) }}">{{ $skill->name }}</a>
        </li>
    </ol>
</nav>