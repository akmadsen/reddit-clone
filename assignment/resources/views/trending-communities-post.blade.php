<div class="trending-communities-post">
    <div class="tc-title">Trending Communities</div>
    <div class="tc-card-container">
        <?php foreach($suggestions as $suggestion): ?>
            @include('trending-community-card')
        <?php endforeach; ?>
    </div>
</div>