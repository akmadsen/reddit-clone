<div class="suggestion-item">
    <a href="{{ $suggestion->id }}">
        <img src="{{ $suggestion->image ?? "https://abs.twimg.com/sticky/default_profile_images/default_profile_400x400.png" }}" alt="" class="circular">
        <div>
            <span class="fw-bold">{{ $suggestion->name }}</span><br>
            <span>{{ $suggestion->handle }}</span>
        </div>
    </a>
</div>