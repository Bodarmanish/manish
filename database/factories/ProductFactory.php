<?php

use Faker\Generator as Faker;

$factory->define(App\model\product::class, function (Faker $faker) {
    return [
        	'name'=>$faker->word,
        	'detail'=>$faker->paragraph,
        	'price'=>$faker->numberBetween(100,1000),
        	'stock'=>$faker->randomDigit,
        	'discount'=>$faker->numberBetween(2,30),

    ];
});
