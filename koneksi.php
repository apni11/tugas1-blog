<?php
$dbhost = "localhost";
$dbname = "apni";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=" . $dbhost ."; dbname=" . $dbname."", $dbuser , $dbpass);