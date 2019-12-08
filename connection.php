<?php
    $dbPassword = "";
    $dbUsername = "root";
    $dbServer = "localhost";
    $dbName = "reservation";

    $connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

    print_r($connection);
