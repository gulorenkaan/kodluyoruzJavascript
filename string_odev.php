<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", 
"Uranus", "Neptune", "", "", NULL];

function filterPlanets ($planets, $number){
    $filteredPlanets = array_filter($planets, function($member){
        return !empty($member);
    });

    $randomPlanets = array_rand($filteredPlanets, $number);

    $newArray = array_map(function ($key) use ($filteredPlanets) {
        return $filteredPlanets[$key];
    }, (array) $randomPlanets);
    return $newArray;
}

echo "<pre>";
print_r (filterPlanets($planets, 2));
print_r (filterPlanets($planets, 3));
print_r (filterPlanets($planets, 2));
print_r (filterPlanets($planets, 4));
print_r (filterPlanets($planets, 5));



?>