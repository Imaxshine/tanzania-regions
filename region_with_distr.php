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
include_once __DIR__ . "/tanzania-regions/autoload.php";

use Regions\Arusha;
use Regions\Dar_es_salaam;
use Regions\Dodoma;
use Regions\Kilimanjaro;
use Regions\Tanga;

//Prepare all Objects in an array
$regions = [
    new Arusha(),
    new Dar_es_salaam(),
    new Dodoma(),
    new Kilimanjaro(),
    new Tanga()
];

//Let create class Instance in a loop so as to access our methods
// $data is an accumulator or empty arry

$data = [];
foreach($regions as $region)
{
    $reg = new ReflectionClass($region);
    $regionName = str_replace("_"," ",$reg->getShortName());
    //Let Apply nested Array
    $data[] = [
        'region'=>$regionName,
        'district'=>$region->districtsList()
    ]; 
}
//Encoded data
$regionEncoded = json_encode($data);

//Data in JSON file
$jsonFile = __DIR__ . "/region_with_distr.json";
file_put_contents($jsonFile,$regionEncoded);

//DecodedData
$regionDecoded = json_decode($regionEncoded,true);
// print_r($regionDecoded);

//Sample usages is like 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions with Districts</title>
</head>
<body>
    <div>
        <form action="" id="region_district">
            <select name="districts" id="districts">
                <option disabled selected>--Districts--</option>
                <?php foreach($regionDecoded as $regData) : ?>

                    <optgroup label="<?php echo $regData['region'] ?>">
                        <?php foreach($regData['district'] as $districts) : ?>

                            <option value="<?php echo $districts ?>"> <?php  echo $districts; ?> </option>

                        <?php endforeach; ?>
                    </optgroup>
                <?php endforeach; ?>
            </select>
        </form>
    </div>
</body>
</html>
