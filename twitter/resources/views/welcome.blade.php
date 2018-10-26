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
                        <div class="nav-item"><i class="far fa-bell"></i>Notifications</div>
                        <div class="nav-item"><i class="far fa-envelope"></i>Messages</div>
                    </div>
                    
                    <div class="center-section height-100p flex-1 flex flex-h flex-j-center flex-a-center">
                        <div class="twitter-bird"><i class="fab fa-twitter"></i></div>
                    </div>
                    
                    <div class="right-section height-100p flex-1 flex flex-h flex-j-end flex-a-center">
                        <div class="search-box">Search for Stuff</div>
                        <div class="profile-icon">Profile Image</div>
                        <div class="tweet-button">Tweet</div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="hero-row bg-2">
            <div class="hero-img">
                <img src="https://pbs.twimg.com/profile_banners/38344185/1473999703/1500x500" alt="" width="100%">
            </div>
        </div>

        <div class="stats bg-white">
            <div class="flex flex-h ml-200">
                <div class="stat">
                    <div class="label fw-bold">
                        Tweets
                    </div>
                    <div class="value text-center">
                        1,966
                    </div>
                </div>

                <div class="stat">
                    <div class="label fw-bold">
                        Following
                    </div>
                    <div class="value text-center">
                        71
                    </div>
                </div>

                <div class="stat">
                    <div class="label fw-bold">
                        Followers
                    </div>
                    <div class="value text-center">
                        100K
                    </div>
                </div>

                <div class="stat">
                    <div class="label fw-bold">
                        Likes
                    </div>
                    <div class="value text-center">
                        39
                    </div>
                </div>

                <div class="stat">
                    <div class="label fw-bold">
                        Moments
                    </div>
                    <div class="value text-center">
                        2
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex full-page">
        <div class="user-details flex-1">
            User Details
        </div>
        <div class="tweets flex-1 bg-white">
            Tweets
        </div>
        <div class="suggestions flex-1">
            Suggestions
        </div>
    </main>
</body>
</html>
