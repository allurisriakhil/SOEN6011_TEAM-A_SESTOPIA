<div class="col sticky-lg-top">
    <div class="pl-xl-0">
        <ul class="list-group mb-3 mb-md-4">
            <div class="list-group-item">
                <h5 class="mb-0">Page Content</h5>
            </div>
            @foreach ($content as $item)
            <a href="{{ __("#{$item['slug']}") }}" class="list-group-item list-group-item-action py-2" data-smooth-scroll data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
                {{ $item['name'] }}
            </a>
            @endforeach
        </ul>
    </div>
</div>