<?php

$hostName= "localhost";
$serverName = "root";
$serverpassword = "";
$dbName = "loginsystemtuts";

$conn = mysqli_connect($hostName, $serverName, $serverpassword, $dbName);

if(!$conn){
  die("connection error".mysqli_connect_error());
}
