<div class="suggestion-item">
    <a href="{{ $suggestion->id }}">
        <img src="{{ $suggestion->image ?? $defaultImage }}" alt="" class="circular">
        <div>
            <span class="fw-bold">{{ $suggestion->name }}</span><br>
            <span>{{ $suggestion->handle }}</span>
        </div>
    </a>
</div>