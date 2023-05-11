<?php
$ID = $_GET['ID'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CardCollection";

$con = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT CardImage FROM MyCards WHERE ID=$ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($con);

header("Content-type: image/jpeg");
echo $row['CardImage'];
print("DONE")
?>