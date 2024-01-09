<?php
    require_once 'config/config.php';

    // Old way to require smth;
//    require_once 'libraries/Controller.php';
//    require_once 'libraries/Core.php';
//    require_once 'libraries/Database.php';

    // New way!
    spl_autoload_register(function ($className){
        require_once "libraries/$className.php";
    });