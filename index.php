<?php

    session_start();
    require_once __DIR__ . '/vendor/autoload.php';
    $app = new CoupleSex\Application();

    $app->run();

?>