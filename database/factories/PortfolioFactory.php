<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\portfolio;
use Faker\Generator as Faker;

$factory->define(portfolio::class, function (Faker $faker) {
    $cate = [        
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
   
    return [
        'img_name'=>$faker->name(),
        'img_desc'=>$faker->sentence(25),
    //    'img_desc'=>$faker->sentence(),
       // 'img_name'=>$faker->name,
  
        'img_path'=>$faker->imageURl(450,500,$faker)
    ];
});
