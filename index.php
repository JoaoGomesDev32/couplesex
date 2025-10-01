<?php

    session_start();
    date_default_timezone_set('Europe/Lisbon');
    require_once __DIR__ . '/vendor/autoload.php';

    define('INCLUDE_PATH_STATIC', 'http://localhost/couplesex/CoupleSex/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/couplesex/');

    $app = new CoupleSex\Application();

    $app->run();

?>