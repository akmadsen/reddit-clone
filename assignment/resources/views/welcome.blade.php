@extends('layout') 

@section('main-feed-content')
    @include('sign-up-cta')
    <?php foreach($posts as $post): ?>
        @include('main-feed-post')
    <?php endforeach; ?>
@endsection
 
@section('aux-feed-content')
    @include('subreddit-post')
    @include('advertisement-post')
    @include('reddit-premium-post')
    @include('trending-communities-post')
    @include('advertisement-post')
    @include('footer-post')
@endsection