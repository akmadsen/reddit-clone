@extends('reddit_layouts.app') 

@section('main-feed-content') 
    <?php if(count($posts) !== 0): ?>
        <?php foreach($posts as $post): ?>
            @include('posts.main-feed') 
        <?php endforeach; ?>
    <?php else: ?>
        <span>No posts yet!</span>
    <?php endif; ?>
@endsection 

@section('aux-feed-content') 
    @include('posts.user-card') 
    @include('posts.footer') 
@endsection