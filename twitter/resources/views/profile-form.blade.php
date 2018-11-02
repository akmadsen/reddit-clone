@extends('layout') 
@section('content')
<div class="container">
    <form action="#">
        <div class="row">
            <label class="col-3" for="handle">Handle: </label>
            <input class="col-9" type="text" name="handle" id="handle">
        </div>

        <div class="row">
            <label class="col-3" for="hero">Hero Image URL: </label>
            <input class="col-9" type="text" name="hero" id="hero">
        </div>

        <div class="row">
            <label class="col-3" for="image">Profile Image URL: </label>
            <input class="col-9" type="text" name="image" id="image">
        </div>

        <div class="row">
            <label class="col-3" for="description">Description: </label>
            <input class="col-9" type="text" name="description" id="description">
        </div>

        <div class="row">
            <label class="col-3" for="location">Location: </label>
            <input class="col-9" type="text" name="location" id="location">
        </div>

        <div class="row">
            <label class="col-3" for="website">Website: </label>
            <input class="col-9" type="text" name="website" id="website">
        </div>

        <input class="col-12" type="submit" value="Submit">
    </form>
</div>
@endsection