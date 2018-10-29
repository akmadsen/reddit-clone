<div class="tc-card">
    <img class="tc-img" src="{{ $suggestion->img }}" alt="">
    <div class="tc-card-text">
        <div class="tc-subreddit">r/{{ $suggestion->name }}</div>
        <div class="tc-subcount">{{ number_format($suggestion->count) }} subscribers</div>
    </div>
    <button class="tc-subs-button">Subscribe</button>
</div>