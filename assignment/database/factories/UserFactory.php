<?php
/**
 * Added in Profile, Subreddit, and Post factories 
 * 
 * @author Alex Madsen
 * 
 * @date November 6, 2018
 */

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Profile::class, function(Faker $faker) {
    return [
        'icon' => 'https://picsum.photos/400/?random'.rand(0,500), 
        'profile_image' => 'https://picsum.photos/500/200/?random'.rand(0,500), 
        'description' => $faker->sentence, 
    ];
});


$factory->define(App\Models\Subreddit::class, function(Faker $faker) {
    return [
        'description' => $faker->sentence, 
        'icon' => 'https://picsum.photos/400/?random'.rand(0,500), 
        'banner' => 'https://picsum.photos/1500/400/?random'.rand(0,500), 
    ];
}); 

$factory->define(App\Models\Post::class, function(Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ]; 
}); 