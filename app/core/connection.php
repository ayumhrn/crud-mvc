<?php

function connection($dbHost, $dbUsername, $dbPassword, $dbName) {
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if (mysqli_connect_errno()){
        die("Database connection failed " . mysqli_connect_error());
    }  
    return $conn;
}   