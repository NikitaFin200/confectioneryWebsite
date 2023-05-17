<?php
$serevername = "localhost";
$username = "root";
$password = "";
$dbname = "bd";

$link = new mysqli($serevername, $username, $password, $dbname);

if($link->connect_error){
    die("Connection failed: " . $link->connect_error);
}

$sql = "CREATE TABLE orders(
        id INT AUTO_INCREMENT PRIMARY KEY,
        product VARCHAR (30) NOT NULL,
        filling VARCHAR (30) NOT NULL,
        weight VARCHAR (30) NOT NULL";

if($link->query($sql) === TRUE){
    print("Table users created successfully");
}
else {
    print("Error" . $link->error);
}

$link->close();
?>