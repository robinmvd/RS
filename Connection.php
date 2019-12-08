<?php
    $dbPassword = "";
    $dbUsername = "root";
    $dbServer = "localhost";
    $dbName = "reservation";

    $connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

    if($connection->connect_errno)
    {
        exit("Database Connection Failed. Reason: ".$connection->connect_error);
    }

    $connection->close();
