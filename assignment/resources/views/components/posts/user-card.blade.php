<div class="user-card-post">
    <?php if($user->profile->profile_image): ?>
        <img class="user-hero" src="{{ $user->profile->profile_image }}" alt="User hero image.">
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
    
    <?php if($user->profile->description): ?>
        <p class="description">{{ $user->profile->description }}</p>
    <?php endif; ?>
    
    <div class="cake-day">
        <p class="cd-title">Cake Day</p>
        <p class="cd-date">
            <i class="fas fa-birthday-cake"></i>
            <span>{{ $user->created_at->format('F d, Y')}}</span>
        </p>
    </div>
    <a class="new-post-button" href="#">New Post</a>
</div>