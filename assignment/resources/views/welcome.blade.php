<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">

  <link rel="stylesheet" href="css/app.css">

  <title>CPNT 262 - PHP - Assignment 1</title>
</head>

<body>
  @include('header')
  <main>
    <div class="container">
      <div class="main-feed">

        @include('sign-up-cta')
        <?php foreach($posts as $post): ?>
          @include('main-feed-post')
        <?php endforeach; ?>

      </div>
      <div class="auxilliary-feed">

        @include('subreddit-post')
        @include('advertisement-post')
        @include('reddit-premium-post')
        @include('trending-communities-post')
        @include('advertisement-post')
        @include('footer-post')
        
      </div>
    </div>
  </main>
</body>

</html>