<?php

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

    $viewData = [
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
        'heroImgURL' => 'https://pbs.twimg.com/profile_banners/38344185/1473999703/1500x500'

    ];

    return view('welcome', $viewData);
});
