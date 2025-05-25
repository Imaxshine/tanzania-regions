<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:application/json');
header('Access-Control-Allow-Method: GET');

require_once __DIR__ . "/../../autoload.php";
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
    $reg = new ReflectionClass($region);
    $regionNames = str_replace("_"," ",$reg->getShortName());
    $data[] = [
        'region'=>$regionNames
    ];
}
echo json_encode($data);
