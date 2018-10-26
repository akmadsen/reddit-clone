<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>    
    <header class="flex flex-v">
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
                        <div class="search-box">Search for Stuff</div>
                        <div class="login-cta">Have an account? <span>Log In</span></div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="hero-row bg-2">
            <div class="hero-img">
                <img src="{{ $heroImgURL }}" alt="" width="100%">
            </div>
        </div>

        <div class="stats bg-white">
            <div class="container">
                <div class="flex flex-h">

                    <div class="user-image-spacer height-100p">
                        <div class="user-image">
                            <img src="{{ $profileImgURL }}" alt="" height="200px" width="200px">
                        </div>
                    </div>

                    <div class="stat">
                        <div class="label fw-bold">
                            Tweets
                        </div>
                        <div class="value text-center">
                            {{ number_format($tweetCount) }}
                        </div>
                    </div>
                    
                    <div class="stat">
                        <div class="label fw-bold">
                            Following
                        </div>
                        <div class="value text-center">
                            {{ number_format($followingCount) }}
                        </div>
                    </div>
                    
                    <div class="stat">
                        <div class="label fw-bold">
                            Followers
                        </div>
                        <div class="value text-center">
                            {{ $followerCount }}
                        </div>
                    </div>
                    
                    <div class="stat">
                        <div class="label fw-bold">
                            Likes
                        </div>
                        <div class="value text-center">
                            {{ number_format($likesCount) }}
                        </div>
                    </div>
                    
                    <div class="stat">
                        <div class="label fw-bold">
                            Moments
                        </div>
                        <div class="value text-center">
                            {{ number_format($momentsCount) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex full-page">
        <div class="container flex flex-h">
            <div class="user-details flex-1">
                <div class="user-header-card">

                    <div class="fz-4 fw-bold">
                        {{ $name }}
                    </div>
                    <div class="c-3">
                        {{ $handle }}
                    </div>
                    <div>
                        {{ $description }}
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt"></i>{{ $location }}
                    </div>
                    <div>
                        <i class="fas fa-link"></i><a href="{{ $websiteURL }}">{{ $websiteTitle }}</a>
                    </div>
                    <div class="c-3">
                        <i class="far fa-calendar-alt"></i>{{ $joinDate }}
                    </div>
                </div>
            </div>
            <div class="tweets flex-2 bg-white">
                <div class="tweet-tabs flex flex-h p-10">
                    <div class="flex-1 text-center fw-bold fz-4 c-select">Tweets</div>
                    <div class="flex-1 text-center fw-bold fz-4 c-brand">Tweets & Replies</div>
                    <div class="flex-1 text-center fw-bold fz-4 c-brand">Media</div>
                </div>
                <div class="tweet-container">
                    <?php foreach($tweets as $tweet): ?>
                    <div class="tweet p-tweet flex flex-h">
                        <div class="tweet-img mr-10">
                            <img class="circular" src="{{ $tweet['iconURL'] }}" alt="">
                        </div>
                        <div class="tweet-content flex-1">
                            <div class="tweet-header flex flex-h flex-a-center">
                                <div class="th-name">{{ $tweet['name'] }}</div>
                                <div class="th-handle">{{ $tweet['handle'] }}</div>
                                <div class="th-middot">&middot;</div>
                                <div class="th-date">{{ $tweet['date'] }}</div>
                                <div class="th-button"><i class="fas fa-chevron-down fz-15"></i></div>
                            </div>
                            <div class="tweet-body">
                            {{ $tweet['content'] }}
                            </div>
                            <div class="tweet-footer flex flex-h mt-10">
                                <div class="tf-item flex flex-h flex-a-center">
                                    <div class="comment-icon"><i class="far fa-comment-alt fz-18"></i></div>
                                    <div class="comment-count fz-16">{{ $tweet['commentCount'] }}</div>
                                </div>
                                <div class="tf-item flex flex-h flex-a-center">
                                    <div class="retweet-icon"><i class="fas fa-retweet fz-18"></i></div>
                                    <div class="retweet-count fz-16">{{ $tweet['retweetCount'] }}</div>
                                </div>
                                <div class="tf-item flex flex-h flex-a-center">
                                    <div class="like-icon"><i class="far fa-heart fz-18"></i></div>
                                    <div class="like-count fz-16">{{ $tweet['likeCount'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="suggestions flex-1">
                <div class="suggestion-card p-10">
                    <div class="suggestion-head">
                        <h3>You may also like</h3>&middot;<a href="#">Refresh</a>
                    </div>
                    <div class="suggestion-list">
                        <?php foreach($suggestionList as $suggestion): ?>
                        <div class="suggestion-item">
                            <img src="{{ $suggestion['icon'] }}" alt="" class="circular">
                            <div>
                                <span class="fw-bold">{{ $suggestion['name'] }}</span><br>
                                <span>{{ $suggestion['handle'] }}</span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </body>
</html>
