<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css">

    <title>CPNT 262 - PHP - Assignment 1</title>
  </head>
  <body>
    <header>
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
          <div class="login-buttons">
            <button class="login-button">LOG IN</button>
            <button class="signin-button">SIGN UP</button>
          </div>
          <div class="old-reddit-link">
            <a href="#"><i class="fas fa-external-link-alt"></i>Visit Old Reddit</a>
          </div>
          <button class="user-options">
            <i class="fas fa-user-alt usr-img"></i>
            <i class="fas fa-sort-down usr-open"></i>
          </button>
        </div>
      </div>
      
      <div class="bottom-header">
        <div class="container">
          <div class="view-options">
            <span class="option-title">View</span>
            <div class="view-opt-icons">
              <i class="fas fa-th selected"></i>
              <i class="fas fa-th-large deselected"></i>
              <i class="fas fa-th-list deselected"></i>
            </div>
          </div>
          <div class="sort-options">
            <span class="option-title">Sort</span>  
            <div class="bh-filter-type bh-filter-list">
              <i class="fas fa-fire flame"></i>
              <span class="sort-option">Hot</span>
              <i class="fas fa-sort-down list-arrow"></i>
            </div>
            <div class="bh-filter-location bh-filter-list">
              <span class="sort-option">Canada</span>
              <i class="fas fa-sort-down list-arrow"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="main-feed">
          <div class="sign-up-cta post">
            <h1>Join the discussion</h1>  
            <span>Comment and be a part of what the internet is talking about.</span>
            <button class="cta-button">Become a Redditor</button>
            <button><i class="fas fa-times"></i></button>
          </div>
          <div class="post">
            Hello, I'm a Post!
          </div>
        </div>
        <div class="auxilliary-feed">
          <div class="subreddit post">
            Subreddit Info Here Plz. 
          </div>
          <div class="advertisement post">
            Advertisement Here Plz.
          </div>
          <div class="reddit-premium post">
            Reddit Premium Stuff Here Plz. 
          </div>
          <div class="trending-communities post">
            Trending Communities Here Plz. 
          </div>
          <div class="advertisement post">
            Another, Separate Ad Here Plz. 
          </div>
          <div class="footer post">
            Reddit Footer Info Here Plz. 
          </div>
        </div>
      </div>
    </main>
  </body>
</html>