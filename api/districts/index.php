<?php
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
header('content-Type:application/json');
foreach($regions as $region)
{
    $name = (new ReflectionClass($region))->getShortName();
    $district = $region->districtsList();
    $data = json_encode([
        "region"=>$name,
        "district"=>$district
    ]);
    
    $responses = json_decode($data,true);

    print_r($responses);

}

$districtEndPoint = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."api/districts";

echo "EndPoint: " . $districtEndPoint;