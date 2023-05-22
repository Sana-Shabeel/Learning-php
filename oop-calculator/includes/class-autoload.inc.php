<?php



spl_autoload_register('autoLoader');

function autoLoader($className) {
    
    
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    // $path = "classes/";
    // $extension = ".inc.php";
    // $fullPath = $path . $className . $extension;
    
    
    if (strpos($url, 'includes') !== false) {
        
        $path = "../classes/";
    } else {
        $path = "classes/";
    }
    
    
    $extension = ".class.php";
    include_once $path . $className . $extension;
}