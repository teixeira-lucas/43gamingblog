<?php

function connection($servername, $port, $username, $password, $database){

    try {
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;

};


