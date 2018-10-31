@extends('layout')


@section('hero-image')
<div class="hero-img">
    <img src="{{ $user->hero_image ?? $defaultHero }}" alt="" width="100%">
</div>
@endsection


@section('lower-bar-content')
<div class="container">
    <div class="flex flex-h">
        
        <div class="user-image-spacer height-100p">
            <div class="user-image">
                <img src="{{ $user->image ?? $defaultImage }}" alt="" height="200px" width="200px">
            </div>
        </div>
        
        <div class="stat">
            <div class="label fw-bold">
                Tweets
            </div>
            <div class="value text-center">
                {{ number_format($user->tweets->count()) }}
            </div>
        </div>
        
        <div class="stat">
            <div class="label fw-bold">
                Following
            </div>
            <div class="value text-center">
                {{ number_format($user->following->count()) }}
            </div>
        </div>
        
        <div class="stat">
            <div class="label fw-bold">
                Followers
            </div>
            <div class="value text-center">
                {{ $user->followers->count() }}
            </div>
        </div>
        
        <div class="stat">
            <div class="label fw-bold">
                Likes
            </div>
            <div class="value text-center">
                {{ number_format($user->likedTweets->count()) }}
            </div>
        </div>
        
        <div class="stat">
            <div class="label fw-bold">
                Moments
            </div>
            <div class="value text-center">
                {{ number_format($user->momentsCount) }}
            </div>
        </div>
    </div>
</div>
@endsection


@section('content') 
<div class="container flex flex-h">
    <div class="user-details flex-1">
        <div class="user-header-card">
            
            <div class="fz-4 fw-bold">
                {{ $user->name }}
            </div>
            
            <div class="c-3">
                {{ $user->handle }}
            </div>
            
            <?php if(!is_null($user->description)): ?>
            <div>
                {{ $user->description}}
            </div>
            <?php endif; ?>

            <?php if(!is_null($user->location)): ?>
            <div>
                <i class="fas fa-map-marker-alt"></i>{{ $user->location }}
            </div>
            <?php endif; ?>
            
            <?php if(!is_null($user->website)): ?>
            <div>
                <i class="fas fa-link"></i><a href="https://www.{{ $user->website }}">{{ $user->website }}</a>
            </div>
            <?php endif; ?>
            
            <div class="c-3">
                <i class="far fa-calendar-alt"></i>{{ $user->created_at->format('M Y') }}
            </div>

        </div>
    </div>
    <div class="tweets flex-2 bg-white">
        <div class="tweet-tabs flex flex-h p-10">
            <div class="flex-1 text-center fw-bold fz-4 c-select">Tweets</div>
            <div class="flex-1 text-center fw-bold fz-4 c-brand">Tweets & Replies</div>
            <div class="flex-1 text-center fw-bold fz-4 c-brand">Media</div>
        </div>
        <div class="tweet-container">
            <?php foreach($tweets as $tweet): ?>
            @include('tweet')
            <?php endforeach; ?>
        </div>
    </div>
    <div class="suggestions flex-1">
        <div class="suggestion-card p-10">
            <div class="suggestion-head">
                <h3>You may also like</h3>&middot;<a href="#">Refresh</a>
            </div>
            <div class="suggestion-list">
                <?php foreach($suggestionList as $suggestion): ?>
                @include('suggestion-item')
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
@endsection