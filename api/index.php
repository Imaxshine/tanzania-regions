<?php
require_once __DIR__ . "/../autoload.php";
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

foreach($regions as $region)
{
    $reg = new ReflectionClass($region);
    $regionNames = str_replace("_"," ",$reg->getShortName());
    echo "{$regionNames}" . "<br>";
}
