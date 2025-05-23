## :boom: Tanzania Regions with Districts :rocket:

***

 ## :one: What is this package hold. :point_down: 
> This is a package that will enable you to program in all its regions and districts available in Tanzania.

> We have put you with API Endpoints that will make your projects easier for you to process data in this [Tanzania-regions](https://github.com/Imaxshine/tanzania-regions.git "Tanzania Package & API") Package. :ghost:
>
> And so far our API is RESTFUL API, the other beauty is that, We have use JSON to __encode__ and finally to **decode** :smile:
> 
***

##### How does this JSON look like? :eyes:

```php
// Let encode results with JSON
$regionEncoded = json_encode($data);
```

```php
// After then we need to decode our previour encoded JSON ready to use any where
$regionDecoded = json_decode($regionEncoded,true);

```
___

## :two: How to install [Tanzania-regions](https://github.com/Imaxshine/tanzania-regions.git "Tanzania Package & API") in your OS (Operating System) :blush:

Go direct to your project root.
:rocket: ___I will show you up on how to open quickly your root project___ :smile:

 1. Open your root project through Command Prompt __(CMD)__
    1. Go in your CMD and  find your root folder with your project.
    2. Find the project folder with command **cd** (Change Directory).
    3. E.g `E:\xampp\htdocs> cd project_root` then press Enter
    4.  `E:\xampp\htdocs\project_root>`
    5. After get the project root the net step is install the [Tanzania-regions](https://github.com/Imaxshine/tanzania-regions.git "Tanzania Package & API") package
    6. Write this command in your CMD and then press Enter again (make sure that you are connected to the Internet ) :point_down:
    7. ` E:\xampp\htdocs\project_root> git clone https://github.com/Imaxshine/tanzania-regions.git ` :fire:
    8. Once you have reached here you will have completed to install the package

___

 2. Open your root project through required root folder :star_struck:
 **Open your root folder manual as:-**
    1. Find here your root folder manual and then open it     ![image1](/screenshort/1.png)
    2. Highlights all main path at the top ![image2](/screenshort/2.png)
    3. Replace a main path with a words __cmd__ then press Enter ![image3](/screenshort/3.png)
    4. Your Command prompt **CMD** will automatic open ![image4](/screenshort/4.png)
    5. Start to install the package with this previour command line `git clone https://github.com/Imaxshine/tanzania-regions.git` then press Enter (make sure that you are connected to the Internet)  ![image5](/screenshort/5.png)
    6. After press Enter you will see this ___Installation progress___ ![image6](/screenshort/6.png)
    7. Back to your root folder and you will get a __package__ installed successfully   ![image7](/screenshort/7.png)

___

## :three: General command line Installation :eye:
```bash
git clone https://github.com/Imaxshine/tanzania-regions.git
```
___

## :four: How to use [Tanzania-regions](https://github.com/Imaxshine/tanzania-regions.git "Tanzania Package & API") Package :star_struck: 

> PHP
> - Get only Regions without districts

```php
<?php
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
   $district = $region->districtsList();
   $data[] = [
    'region'=>$name2
   ];
}
// Let encode results with JSON
$regionEncoded = json_encode($data);
// After then we need to decode our previour encoded JSON ready to use any where
$regionDecoded = json_decode($regionEncoded,true);
```

How to apply this in real life with **HTML** form :joy:

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Regions</title>
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
```

:computer: An Output :ghost:

> ![regions1](/screenshort/regions1.png)

***

[^1]: Nitaendelea na district hapa
