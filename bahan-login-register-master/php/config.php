<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "rizkynolimit";
$db_name = "fesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}