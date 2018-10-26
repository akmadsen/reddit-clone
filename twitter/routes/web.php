<?php
use Faker\Factory; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $faker = Factory::create(); 

    $viewData = [
        'user' => [

            'name' => 'Meat Loaf', 
            'handle' => '@RealMeatLoaf', 
            'description' => 'Official Meat Loaf Twitter Page', 
            'location' => 'Los Angeles and NY', 
            'websiteURL' => 'https://www.meatloaf.net', 
            'websiteTitle' => 'meatloaf.net', 
            'joinDate' => 'Joined May 2009', 
            
            'tweetCount' => 1966, 
            'followingCount' => 71, 
            'followerCount' => '100K', 
            'likesCount' => 39, 
            'momentsCount' => 2, 
            
            'profileImgURL' => 'https://pbs.twimg.com/profile_images/812809838/IMG_7923_bw_400x400.jpg', 
            'heroImgURL' => 'https://pbs.twimg.com/profile_banners/38344185/1473999703/1500x500',
            
        ],
        'suggestionList' => [
            [
                'name' => 'Bat Out of Hell', 
                'handle' => '@BatTheMusical', 
                'icon' => 'https://pbs.twimg.com/profile_images/1016606849284616194/Iwz5QTnQ_bigger.jpg'
            ],
            [
                'name' => 'Gene Simmons', 
                'handle' => '@genesimmons', 
                'icon' => 'https://pbs.twimg.com/profile_images/697624194205544449/PaabF10k_bigger.jpg'
            ],
            [
                'name' => 'Al Yankovic', 
                'handle' => '@alyankovic', 
                'icon' => 'https://pbs.twimg.com/profile_images/246073324/IL2_bigger.jpg'
            ],
            [
                'name' => 'Ozzy Osbourne', 
                'handle' => '@OzzyOsbourne', 
                'icon' => 'https://pbs.twimg.com/profile_images/961022056631447552/Ywh6u5UM_bigger.jpg'
            ],
            [
                'name' => 'Def Leppard', 
                'handle' => '@DefLeppard', 
                'icon' => 'https://pbs.twimg.com/profile_images/954324976089419776/UPCqtSzf_bigger.jpg'
            ]
        ],

        'tweets' => [
            [
                'iconURL' => 'https://pbs.twimg.com/profile_images/812809838/IMG_7923_bw_bigger.jpg',
                'name' => 'Meat Loaf',
                'handle' => '@RealMeatLoaf',
                'date' => 'Oct 21',
                'content' => $faker->paragraph,
                'commentCount' => 123,
                'retweetCount' => 67,
                'likeCount' => 321
            ],
            [
                'iconURL' => 'https://pbs.twimg.com/profile_images/812809838/IMG_7923_bw_bigger.jpg',
                'name' => 'Meat Loaf',
                'handle' => '@RealMeatLoaf',
                'date' => 'Sep 27',
                'content' => $faker->paragraph,
                'commentCount' => 70,
                'retweetCount' => 53,
                'likeCount' => 431
            ]  
        ]
    ];

    return view('welcome', $viewData);
});
