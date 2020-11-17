<?php
$host="localhost";
$db="precious_nutrition";
$port="3306";
$user="root";
$pwd="";

$connection=new mysqli($host,$user,$pwd,$db,$port);

if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }