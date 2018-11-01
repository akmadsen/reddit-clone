<div class="top-top bg-white height-50">
    <div class="container height-100p">
        <nav class="flex flex-h height-100p">
            <div class="left-section height-100p flex flex-h flex-1 flex-a-center">
                <div class="nav-item"><i class="fas fa-home"></i>Home</div>
                <div class="nav-item"><i class="fas fa-bolt"></i>Moments</div>
            </div>

            <div class="center-section height-100p flex-1 flex flex-h flex-j-center flex-a-center">
                <div class="twitter-bird"><i class="fab fa-twitter"></i></div>
            </div>

            <div class="right-section height-100p flex-1 flex flex-h flex-j-end flex-a-center">
                <div class="search-box">
                    <span>Search Twitter</span>
                    <i class="fas fa-search"></i>
                </div>
                <div class="login-cta">
                    {{-- <span>Have an account?</span>
                    <span>Log In<i class="fas fa-caret-down"></i></span> --}}
                    <?php if(Auth::check()) : ?>
                        <span>Welcome, {{ request()->user()->name }}</span>
                        @include('logout')
                    <?php else: ?>
                        <a href="/login">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>
</div>