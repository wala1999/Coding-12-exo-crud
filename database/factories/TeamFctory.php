<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\team;
use Faker\Generator as Faker;

$factory->define(team::class, function (Faker $faker) {
    $cate = [        
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
   
    return [
        'img_name'=>$faker->name(),
        'img_desc'=>$faker->sentence(25),
    //    'img_desc'=>$faker->sentence(),
       // 'img_name'=>$faker->name,
  
        'img_path'=>$faker->imageURl(300,300,$faker)
    ];
});
