<div class="tweet p-tweet flex flex-h">
    <div class="tweet-img mr-10">
        <img class="circular" src="{{ $tweet->user->profile->image }}" alt="">
    </div>
    <div class="tweet-content flex-1">
        <div class="tweet-header flex flex-h flex-a-center">
            <div class="th-name">{{ $tweet->user->name }}</div>
            <div class="th-handle">&commat;{{ $tweet->user->profile->handle }}</div>
            <div class="th-middot">&middot;</div>
            <div class="th-date">{{ $tweet->created_at->format('M j') }}</div>
            <div class="th-button"><i class="fas fa-chevron-down fz-15"></i></div>
        </div>
        <div class="tweet-body">
            {{ $tweet->content }}
        </div>
        <div class="tweet-footer flex flex-h mt-10">
            <div class="tf-item flex flex-h flex-a-center">
                <div class="comment-icon"><i class="far fa-comment-alt fz-18"></i></div>
                <div class="comment-count fz-16">{{ $tweet->commentCount }}</div>
            </div>
            <div class="tf-item flex flex-h flex-a-center">
                <div class="retweet-icon"><i class="fas fa-retweet fz-18"></i></div>
                <div class="retweet-count fz-16">{{ $tweet->retweetCount }}</div>
            </div>
            <div class="tf-item flex flex-h flex-a-center">
                <div class="like-icon"><i class="far fa-heart fz-18"></i></div>
                <div class="like-count fz-16">{{ $tweet->likes->count() }}</div>
            </div>
        </div>
    </div>
</div>