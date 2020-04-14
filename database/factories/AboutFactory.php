<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    $cate = [        
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'];
    
        return [
            'img_about' => $faker->imageUrl(300, 300, $faker->randomElement($cate)),
          
            'titre2'=>$faker->name(),
            "description2" => $faker->text(),
        ];
});
