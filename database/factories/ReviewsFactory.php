<?php

use Faker\Generator as Faker;
use App\model\product;

$factory->define(App\model\reviews::class, function (Faker $faker) {
    return [

    		'product_id'=>function()
    		{

    			return product::all()->random();
    		},

    		'customer' => $faker->name,
    		'review'=>$faker->paragraph,
    		'star'=>$faker->numberBetween(0,5),
    			
    ];
});
