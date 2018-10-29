<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
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
                        <div class="search-box">
                            <span>Search Twitter</span>
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="login-cta">
                            <span>Have an account?</span>
                            <span>Log In<i class="fas fa-caret-down"></i></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="hero-row bg-2">
        </div>

        <div class="stats bg-white">
            <div class="container">
                <div class="flex flex-h">
                </div>
            </div>
        </div>
    </header>

    <main class="flex full-page">
        @yield('content')
    </main>
</body>

</html>