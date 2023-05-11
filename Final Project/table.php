<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CardCollection";

$con = mysqli_connect($servername, $username, $password, $dbname);
if($con === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$sql = "SELECT CardName, CardOrigin, CardImage, Favorite FROM MyCards";
$result = $con->query($sql);

mysqli_close($con);

?>