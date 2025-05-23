<?php

// =====================================================* 
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// *                    CREATED BY IMAXSHINE            *
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// *                                                    *
// =====================================================*

// <------------------------ Copy and use this in your production---------------------------->
require_once __DIR__ . "/tanzania-regions/autoload.php";
use Regions\Arusha;
use Regions\Dar_es_salaam;
use Regions\Dodoma;
use Regions\Tanga;
use Regions\Kilimanjaro;


$regions = [
    new Arusha(),
    new Dar_es_salaam(),
    new Dodoma(),
    new Tanga(),
    new Kilimanjaro()
];


$data = [];

foreach($regions as $region){
    $name2 = (new ReflectionClass($region))->getShortName();
   $name2 = str_replace("_"," ",$name2);
   
   $data[] = [
    'region'=>$name2
   ];
}
// Let encode results with JSON
$regionEncoded = json_encode($data);

//Data in JSON file
$jsonFile = __DIR__ . "/allregions.json";
file_put_contents($jsonFile,$regionEncoded);

// After then we need to decode our previour encoded JSON ready to use any where
$regionDecoded = json_decode($regionEncoded,true);
