<?php

    session_start();
    require_once __DIR__ . '/vendor/autoload.php';

    define('INCLUDE_PATH_STATIC', 'http://localhost/couplesex/CoupleSex/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/couplesex/');

    $app = new CoupleSex\Application();

    $app->run();

?>