<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Profesion::class, function (Faker $faker) {
    return [
        //
     	   'profesion' => $faker->sentence(3,false) ,       
    ];
    
});
