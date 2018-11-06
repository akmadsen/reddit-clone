
<a class="edit-button" href="/edit_profile">Edit Profile</a>

{{-- Ripped from Laravel layouts.app.blade.php --}}
<div class="logout-button">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<a class="profile-button" href="/u/<?php echo request()->user()->profile->handle ?>">
    <span>Welcome, {{ request()->user()->profile->handle }}</span> 
</a>