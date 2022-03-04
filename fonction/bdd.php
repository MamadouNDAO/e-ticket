<?php
    

    try {
        $host = "localhost";
        $dbusername = "root";
        $pass = "";
        $bdd = "e-ticket";
        $conn = new PDO("mysql:host=$host;dbname=$bdd", $dbusername, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (Exception $e) {
        $e->getMessage();
    }