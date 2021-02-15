<?php

    ini_set('display_errors','On');
   

    require __DIR__.'/vendor/autoload.php';
    
    $base=dirname($_SERVER['SCRIPT_NAME']).'/';
    if ($base=='//'){
        $base='/';
    }
    
    define('BASE',$base);
    
    use App\App;
   
   // App::init();
   

    App::run();
    