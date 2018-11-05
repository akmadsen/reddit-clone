@extends('layout')

@section('main-feed-content') 
    <form class="profile-form" action="/edit_profile" method="post">
        @csrf 

        <div class="form-field">
            <label for="handle">Handle:</label>
            <input type="text" name="handle" id="handle">
        </div>

        <div class="form-field">
            <label for="icon">Icon:</label>
            <input type="text" name="icon" id="icon">
        </div>

        <div class="form-field">
            <label for="profile_image">Profile Image:</label>
            <input type="text" name="profile_image" id="profile_image">
        </div>

        <div class="form-field">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description">
        </div>

        <input type="submit" value="Update Profile">
    </form>
@endsection 

@section('aux-feed-content') 
    @include('user-card-post') 
    @include('footer-post') 
@endsection