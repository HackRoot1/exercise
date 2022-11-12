<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "college";

$conn = mysqli_connect($host, $user, $pass, $db);

$imageName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];
$folder = "./images/".$imageName;
?>