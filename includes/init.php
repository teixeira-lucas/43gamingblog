<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require ('functions.php');
    require ('const.php');

    $connection = connection($servername, $port, $username, $password, $database); // chiamo la function connection
