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
    @include('user-card-post') 
    @include('footer-post') 
@endsection