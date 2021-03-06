<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $title = $faker->name();
    $slug   =  str_replace( " " , "-" , $title );
 
    return [
        "title" => $title ,
        "slug"  => $slug ,
        "date"  => $faker -> sentence(2) ,
        "img"   => "391_Heloko.png" ,
        "desc"  => $faker->sentence(200) ,
        "link"  => $faker -> text(100) ,
    ];
});
