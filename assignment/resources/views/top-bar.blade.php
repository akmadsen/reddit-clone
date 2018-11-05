<div class="top-header">
    <div class="th-left">
        <div class="company">
            <i class="fab fa-reddit logo"></i>
            <span>reddit</span>
        </div>
        <div class="th-filter">
            <i class="fas fa-chart-line trend-line"></i>
            <span>Popular</span>
            <i class="fas fa-sort-down open-list"></i>
        </div>
    </div>
    <div class="th-mid">
        <div class="search-bar">
            <i class="fas fa-search search-glass"></i>
            <span>Search Reddit</span>
        </div>
        <div class="search-filters">
            <i class="fas fa-chart-bar search-filter-icon"></i>
            <i class="fas fa-chart-line search-filter-icon"></i>
            <i class="fas fa-archive search-filter-icon"></i>
        </div>
    </div>
    <div class="th-right">
        <?php if (!Auth::check()): ?> 
            @include('login-buttons')
        <?php else: ?>
            <span>Welcome {{ request()->user()->name }}</span> 
        <?php endif; ?> 
    </div>
</div>