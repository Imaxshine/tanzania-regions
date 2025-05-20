<?php
spl_autoload_register(function($classess){
    $path = str_replace('\\','/',$classess);
    $file = __DIR__ . "/classes/" . $path . ".php";
    if(file_exists($file)){
        require_once $file;
    }
    if(!file_exists($file)){
        require_once __DIR__ . "/404.php";
    }
});