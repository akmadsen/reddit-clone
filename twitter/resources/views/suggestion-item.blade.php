<div class="suggestion-item">
    <a href="{{ $suggestion->id }}">
        <img src="{{ $suggestion->profile->image ?? $defaultImage }}" alt="" class="circular">
        <div>
            <span class="fw-bold">{{ $suggestion->profile->name }}</span><br>
            <span>&commat;{{ $suggestion->profile->handle }}</span>
        </div>
    </a>
</div>