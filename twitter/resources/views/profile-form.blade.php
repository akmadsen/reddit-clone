@extends('layout') 

@section('content')
<div class="container">
    <h1>Profile Form</h1>
    <form action="/profile" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="" for="handle">Handle: </label>
            <input 
                class="form-control" 
                type="text" 
                name="handle" 
                id="handle" 
                placeholder="Handle"
                value="{{ $handle }}"
            />
        </div>

        <div class="form-group">
            <label class="" for="hero">Hero Image URL: </label>
            <input 
                class="form-control" 
                type="text" 
                name="hero"
                id="hero"
                value="{{ $hero }}"
            />
        </div>

        <div class="form-group">
            <label class="" for="image">Profile Image URL: </label>
            <input 
                class="form-control"
                type="text" 
                name="image" 
                id="image"
                value="{{ $image }}"
            />
        </div>

        <div class="form-group">
            <label class="" for="description">Description: </label>
            <input 
                class="form-control" 
                type="text" 
                name="description" 
                id="description"
                value="{{ $description }}"
            />
        </div>

        <div class="form-group">
            <label class="" for="location">Location: </label>
            <input 
                class="form-control"
                type="text"
                name="location"
                id="location"
                value="{{ $location }}"
            />
        </div>

        <div class="form-group">
            <label class="" for="website">Website: </label>
            <input 
                class="form-control" 
                type="text" 
                name="website"
                id="website"
                value="{{ $website }}"/>
        </div>

        <input
            class="btn btn-primary" 
            type="submit" 
            value="Submit"
        />
    </form>
</div>
@endsection