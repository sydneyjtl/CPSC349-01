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

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['cardname'];
    $origin = $_POST['cardorigin'];
    $image = $_POST['cardimage'];
    if($_POST['favoritecard'] == NULL) {
        $favorite = 0;
    } else {
        $favorite = 1;
    }
}

// echo var_dump($name, $origin, $image, $favorite);


$sql = "INSERT INTO MyCards (CardName, CardOrigin, CardImage, Favorite)
                     VALUES ('$name', '$origin', '$image', '$favorite')";

$rs = mysqli_query($con, $sql);
// if ($rs) {
//     echo "Card added to collection!";
// }

mysqli_close($con);
header("Location: upload.html");

?>

