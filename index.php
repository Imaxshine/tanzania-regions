<?php
require_once __DIR__ . "/autoload.php";
use Regions\Arusha;
use Regions\Dar_es_salaam;
use Regions\Dodoma;
use Regions\Tanga;
use Regions\Kilimanjaro;

//Kusanya Region zote ifadhi katika Array

$regions = [
    new Arusha(),
    new Dar_es_salaam(),
    new Dodoma(),
    new Tanga(),
    new Kilimanjaro()
];


// Let get all regions names it self
// foreach($regions as $region){
//     $object = new ReflectionClass($region);
//     $name = trim(str_replace("_"," ",$object->getShortName()));
//     echo $name . "<br>";
    
// }
// echo "<br>";
// =============================================================

// Let get all Rigions with each District

header('Content-Type:application/json');

$data = [];

foreach($regions as $region){
    $name2 = (new ReflectionClass($region))->getShortName();
   $name2 = str_replace("_"," ",$name2);
   $district = $region->districtsList();
   $data[$name2] = $district;
}
$encodedData = json_encode($data);

$response = json_decode($encodedData,true);
print_r($response);