<?php
$servername = "localhost";
$username = "card_collector";
$password = "collection_pwd";
$dbname = "myCollection";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO MyCards (";
    
if ($conn->query($sql) === TRUE) {
    echo "New card created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

