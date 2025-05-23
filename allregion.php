<?php

//TODO RENAME THIS (index.php) TO AVOID LANDING PAGE COLLISION

require_once __DIR__ . "/autoload.php";
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

// header('Content-Type:application/json');

$data = [];

foreach($regions as $region){
    $name2 = (new ReflectionClass($region))->getShortName();
   $name2 = str_replace("_"," ",$name2);
   $district = $region->districtsList();
   $data[] = [
    'region'=>$name2
   ];
}
// Let encode results with JSON
$regionEncoded = json_encode($data);

// After then we need to decode our previour encoded JSON ready to use any where
$regionDecoded = json_decode($regionEncoded,true);

// This is How you can use this in your project as:-
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <select name="region" id="region">
                <option selected disabled>--Select--</option>
                <?php foreach($regionDecoded as $reg):?>
                    <option value="<?php echo $reg['region']; ?>"> <?php echo $reg['region']; ?> </option>
                    <?php endforeach; ?>
            </select>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>
</body>
</html>
