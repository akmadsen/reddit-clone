@extends('layout') 

@section('main-feed-content') 
    <?php if(count($posts) !== 0): ?>
        <?php foreach($posts as $post): ?>
            @include('main-feed-post') 
        <?php endforeach; ?>
    <?php else: ?>
        <span>No posts yet!</span>
    <?php endif; ?>
@endsection 

@section('aux-feed-content') 
    <div class="user-card-post">
        <?php if($user->profile->hero_image): ?>
            <img class="user-hero" src="#" alt="User hero image.">
        <?php else: ?>
            <div class="default-user-hero"></div>
        <?php endif; ?>
        
        <img
            class="user-icon" 
            src="{{ $user->profile->icon ? 
                $user->profile->icon : 
                'https://i.redd.it/130am13nj6201.png' }}" 
            alt="User icon image."
        />
        <span class="handle">u/{{ $user->profile->handle }}</span>
        <p class="description">Description.</p>
        <a class="new-post-button" href="#">New Post</a>
    </div>
    @include('footer-post') 
@endsection