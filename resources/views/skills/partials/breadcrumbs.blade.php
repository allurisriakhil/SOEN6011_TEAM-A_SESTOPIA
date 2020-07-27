<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('skills') }}">Skills</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('skills', ['skill' => Str::slug($skill)]) }}">{{ $skill }}</a>
        </li>
    </ol>
</nav>