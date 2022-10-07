<?php
$dbSerwer="localhost";
$dbUser="root";
$dbPass="";
$dbName="biuro";


$link=mysqli_connect($dbSerwer, $dbUser, $dbPass, $dbName);
$link->set_charset("utf8");

?>