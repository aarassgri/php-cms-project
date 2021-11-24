<?php
$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = 'malkoss';
$dbName = 'cms';

$connection = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

if ($connection){
    // echo "We are connected";
}
