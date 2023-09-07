<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "db_controller";

$db_connect = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if($db_connect->connect_error){
    die("server bermasalah");
}
?>