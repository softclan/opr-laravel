<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    $user_ids = DB::table('users')->pluck('id')->all();
	$title = $faker->realText(30);
	$category = ['Sports','Fashion','Gossip'];
	$tag = ['Davido','President Buhari','Osun elections'];

    return [
        'user_id' => $faker->randomElement($user_ids) ,
        'title' => $title,
        'title_slug' => str_slug($title),
        'category' => $faker->randomElement($category),
        'first_tag' => $faker->randomElement($tag),
        'content' => $faker->realText(100),
    ];
});


