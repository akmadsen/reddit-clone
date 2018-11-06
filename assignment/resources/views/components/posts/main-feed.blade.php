<div class="post">
    <div class="post-votes">
        <i class="fas fa-arrow-up upvote-arrow"></i>
        <span class="vote-count">{{ $post->upVotes()->count() - $post->downVotes()->count() }}</span>
        <i class="fas fa-arrow-down downvote-arrow"></i>
    </div>
    <div class="post-content">
        <div class="post-header">
            <img class="post-subreddit-icon" src="{{ $post->subreddit->icon }}" alt="" height="20px" width="20px">
            <div class="subreddit-link">
                <a href="/r/{{ $post->subreddit->handle }}">
                    r/{{ $post->subreddit->handle }}
                </a>
            </div>
            <span class="ph-middot">.</span>
            <div class="post-info">
                <div class="post-credit">Posted by</div>
                <a class="post-username" 
                    href="/u/{{ $post->user->profile->handle }}"
                >
                    u/{{ $post->user->profile->handle }}
                </a>
                <a class="post-time" href="#">{{ $post->created_at->format('M d') }}</a>
            </div>
        </div>
        <div class="post-body">
            <h2 class="post-title">
                {{ $post->title }}
            </h2>
            <div class="post-text">
                {{ $post->content }}
            </div>
        </div>
        <div class="post-footer">
            <div class="comment-count">
                <i class="fas fa-comment-alt"></i>
                <span>{{ $post->commentCount ?? 0 }} Comments</span>
            </div>
            <div class="share-button">
                <i class="fas fa-share"></i>
                <span>Share</span>
            </div>
            <div class="save-button">
                <i class="fas fa-bookmark"></i>
                <span>Save</span>
            </div>
            <div class="more-button">
                <i class="fas fa-ellipsis-h"></i>
            </div>
        </div>
    </div>
</div>