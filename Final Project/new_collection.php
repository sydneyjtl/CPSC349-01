<?php
$servername = "localhost";
$username = "card_collector";
$password = "collection_pwd";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE myCollection";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE MyCards (
    ID int NOT NULL AUTO_INCREMENT,
    CardName varchar(255) NOT NULL,
    CardOrigin varchar(255),
    CardImage image,
    UNIQUE (ID),
    PRIMARY KEY (ID)
    )";
    
if ($conn->query($sql) === TRUE) {
    echo "Table MyCards created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>

