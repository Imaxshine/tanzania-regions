<?php
header('content-Type:application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Origin: *');

include_once __DIR__ . "/../../autoload.php";

use Regions\Arusha;
use Regions\Dar_es_salaam;
use Regions\Dodoma;
use Regions\Kilimanjaro;
use Regions\Tanga;

$regions = [
    new Arusha(),
    new Dar_es_salaam(),
    new Dodoma(),
    new Kilimanjaro(),
    new Tanga()
];

$data = [];
foreach($regions as $region)
{
    $name = (new ReflectionClass($region))->getShortName();
    $district = $region->districtsList();
    $data[] = [
        "region"=>$name,
        "district"=>$district
    ];
}

//Get data in JSON format
echo json_encode($data,JSON_PRETTY_PRINT);

