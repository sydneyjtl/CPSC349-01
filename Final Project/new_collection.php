<?php
$servername = "localhost";
$username = "root";
$password = "cardcollection_pwd";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE myCollection";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database.";
}

$sql = "CREATE TABLE MyCards (
    ID int NOT NULL AUTO_INCREMENT,
    CardName varchar(255) NOT NULL,
    CardOrigin varchar(255),
    CardImage image,
    Favorite boolean,
    UNIQUE (ID),
    PRIMARY KEY (ID)
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Table MyCards created successfully";
} else {
    echo "Error creating table.";
}

mysqli_close($con);

?>

